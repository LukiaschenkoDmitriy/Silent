<?php declare(strict_types=1);

namespace Silent\Core\ScopeBuilder;

use Silent\Core\Command\CDP\CDPCommandInterface;
use Silent\Core\Command\W3C\Events\W3CommandEvent;
use Silent\Core\Command\W3C\Events\W3CommandResultEvent;
use Silent\Core\Command\W3C\W3CCommandInterface;
use Silent\Core\WebDriver\WebDriverInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class ScopeBuilder
{
    /** @var Rule[] */
    private array $rules = [];

    private ?Rule $current = null;

    /** @var array<int, list<array{0: string, 1: callable}>> spl_object_id(rule) => [[eventClass, listener], ...] */
    private array $registered = [];

    /** @var list<array{rule: string, result: mixed}> */
    private array $results = [];

    private bool $paused = false;

    /** @var array<string, true> */
    private array $pausedGroups = [];

    private bool $dryRun = false;

    private ?\Closure $logger = null;

    public function __construct(
        private EventDispatcherInterface $dispatcher,
        private WebDriverInterface $webdriver,
    ) {}

    public function set(CDPCommandInterface|W3CCommandInterface|\Closure|array $command): self
    {
        $this->commit();
        $this->current = new Rule($this->normalize($command));

        return $this;
    }

    public function call(callable $callable, mixed ...$args): self
    {
        return $this->set([$callable, $args]);
    }

    public function run(\Closure $closure): self
    {
        return $this->set($closure);
    }

    public function named(string $name): self
    {
        $this->rule()->name = $name;

        return $this;
    }

    public function group(string $group): self
    {
        $this->rule()->group = $group;

        return $this;
    }

    public function afterCommand(string $commandClass): self
    {
        $this->rule()->triggers[] = new Trigger(TriggerPhase::After, $commandClass);

        return $this;
    }

    public function beforeCommand(string $commandClass): self
    {
        $this->rule()->triggers[] = new Trigger(TriggerPhase::Before, $commandClass);

        return $this;
    }

    /** @param string[] $commandClasses */
    public function afterCommands(array $commandClasses): self
    {
        foreach ($commandClasses as $class) {
            $this->afterCommand($class);
        }

        return $this;
    }

    /** @param string[] $commandClasses */
    public function beforeCommands(array $commandClasses): self
    {
        foreach ($commandClasses as $class) {
            $this->beforeCommand($class);
        }

        return $this;
    }

    public function afterAny(): self
    {
        $this->rule()->triggers[] = new Trigger(TriggerPhase::After);

        return $this;
    }

    public function beforeAny(): self
    {
        $this->rule()->triggers[] = new Trigger(TriggerPhase::Before);

        return $this;
    }

    public function onEvent(string $eventClass): self
    {
        $this->rule()->triggers[] = new Trigger(TriggerPhase::Event, $eventClass);

        return $this;
    }

    public function when(\Closure $predicate): self
    {
        $this->rule()->conditions[] = $predicate;

        return $this;
    }

    public function wait(int $milliseconds): self
    {
        return $this->waitAfter($milliseconds);
    }

    public function waitAfter(int $milliseconds): self
    {
        $this->rule()->waitAfterMs = $milliseconds;

        return $this;
    }

    public function waitBefore(int $milliseconds): self
    {
        $this->rule()->waitBeforeMs = $milliseconds;

        return $this;
    }

    public function waitUntil(\Closure $condition, int $timeoutMs = 5000, int $intervalMs = 100): self
    {
        $rule = $this->rule();
        $rule->waitUntil = $condition;
        $rule->waitUntilTimeoutMs = $timeoutMs;
        $rule->waitUntilIntervalMs = $intervalMs;

        return $this;
    }

    public function retry(int $times, int $delayMs = 0): self
    {
        $rule = $this->rule();
        $rule->retries = max(0, $times);
        $rule->retryDelayMs = $delayMs;

        return $this;
    }

    public function debounce(int $milliseconds): self
    {
        $this->rule()->debounceMs = $milliseconds;

        return $this;
    }

    public function once(): self
    {
        return $this->times(1);
    }

    public function times(int $n): self
    {
        $this->rule()->remaining = max(1, $n);

        return $this;
    }

    public function onFailure(\Closure $handler): self
    {
        $this->rule()->onFailure = $handler;

        return $this;
    }

    /**
     * @return Rule[]
     */
    public function process(): array
    {
        $this->commit();

        $processed = $this->rules;
        $this->rules = [];

        foreach ($processed as $rule) {
            foreach ($rule->triggers as $trigger) {
                $eventClass = match ($trigger->phase) {
                    TriggerPhase::Before => W3CommandEvent::class,
                    TriggerPhase::After => W3CommandResultEvent::class,
                    TriggerPhase::Event => $trigger->class,
                };

                $listener = function (object $event) use ($rule, $trigger): void {
                    $this->handle($rule, $trigger, $event);
                };

                $this->dispatcher->addListener($eventClass, $listener);
                $this->registered[spl_object_id($rule)][] = [$eventClass, $listener];
            }
        }

        return $processed;
    }

    public function remove(Rule $rule): void
    {
        $id = spl_object_id($rule);

        foreach ($this->registered[$id] ?? [] as [$eventClass, $listener]) {
            $this->dispatcher->removeListener($eventClass, $listener);
        }

        unset($this->registered[$id]);
    }

    public function clear(): void
    {
        foreach ($this->registered as $listeners) {
            foreach ($listeners as [$eventClass, $listener]) {
                $this->dispatcher->removeListener($eventClass, $listener);
            }
        }

        $this->registered = [];
        $this->rules = [];
        $this->current = null;
    }

    public function pause(?string $group = null): self
    {
        if ($group === null) {
            $this->paused = true;
        } else {
            $this->pausedGroups[$group] = true;
        }

        return $this;
    }

    public function resume(?string $group = null): self
    {
        if ($group === null) {
            $this->paused = false;
        } else {
            unset($this->pausedGroups[$group]);
        }

        return $this;
    }

    /**
     * @param (\Closure(string): void)|null $logger
     */
    public function dryRun(bool $enabled = true, ?\Closure $logger = null): self
    {
        $this->dryRun = $enabled;
        $this->logger = $logger;

        return $this;
    }

    /**
     * @return list<array{rule: string, result: mixed}>
     */
    public function results(): array
    {
        return $this->results;
    }

    private function handle(Rule $rule, Trigger $trigger, object $event): void
    {
        if (!$this->isActive($rule) || $rule->running) {
            return;
        }

        if (!$this->matches($trigger, $event)) {
            return;
        }

        foreach ($rule->conditions as $condition) {
            if (!$condition($event, $this->webdriver)) {
                return;
            }
        }

        $now = hrtime(true);
        if ($rule->debounceMs > 0
            && $rule->lastRunNs !== null
            && ($now - $rule->lastRunNs) < $rule->debounceMs * 1_000_000
        ) {
            return;
        }
        $rule->lastRunNs = $now;

        if ($rule->remaining !== null) {
            $rule->remaining--;
        }

        $rule->running = true;
        try {
            $this->execute($rule, $event);
        } catch (\Throwable $e) {
            if ($rule->onFailure === null) {
                throw $e;
            }
            ($rule->onFailure)($e, $event, $this->webdriver);
        } finally {
            $rule->running = false;

            if ($rule->remaining !== null && $rule->remaining <= 0) {
                $this->remove($rule);
            }
        }
    }

    private function execute(Rule $rule, object $event): void
    {
        $this->msleep($rule->waitBeforeMs);

        if ($rule->waitUntil !== null) {
            $this->awaitCondition($rule, $event);
        }

        if ($this->dryRun) {
            $this->log(sprintf('[dry-run] would run %s', $rule->label()));

            return;
        }

        $attempt = 0;
        while (true) {
            try {
                $result = ($rule->action)($event);
                break;
            } catch (\Throwable $e) {
                if ($attempt++ >= $rule->retries) {
                    throw $e;
                }
                $this->msleep($rule->retryDelayMs);
            }
        }

        $this->results[] = ['rule' => $rule->label(), 'result' => $result];

        $this->msleep($rule->waitAfterMs);
    }

    private function awaitCondition(Rule $rule, object $event): void
    {
        $deadline = hrtime(true) + $rule->waitUntilTimeoutMs * 1_000_000;

        while (!($rule->waitUntil)($this->webdriver, $event)) {
            if (hrtime(true) >= $deadline) {
                throw new \RuntimeException(sprintf(
                    'waitUntil timed out after %d ms for %s',
                    $rule->waitUntilTimeoutMs,
                    $rule->label(),
                ));
            }
            $this->msleep($rule->waitUntilIntervalMs);
        }
    }

    private function matches(Trigger $trigger, object $event): bool
    {
        if ($trigger->phase === TriggerPhase::Event) {
            return true;
        }

        if ($trigger->class === null) {
            return true;
        }

        return isset($event->command) && $event->command instanceof $trigger->class;
    }

    private function isActive(Rule $rule): bool
    {
        if ($this->paused) {
            return false;
        }

        return $rule->group === null || !isset($this->pausedGroups[$rule->group]);
    }

    private function normalize(CDPCommandInterface|W3CCommandInterface|\Closure|array $command): \Closure
    {
        return match (true) {
            $command instanceof CDPCommandInterface => fn (): mixed => $this->webdriver->executeCDP($command),
            $command instanceof W3CCommandInterface => fn (): mixed => $this->webdriver->executeW3C($command),
            $command instanceof \Closure => fn (object $event): mixed => $command($event, $this->webdriver),
            default => fn (): mixed => $command[0](...($command[1] ?? [])),
        };
    }

    private function rule(): Rule
    {
        return $this->current
            ?? throw new \LogicException('At first call set()/call()/run(), to create the rule.');
    }

    private function commit(): void
    {
        if ($this->current !== null) {
            $this->rules[] = $this->current;
            $this->current = null;
        }
    }

    private function log(string $message): void
    {
        $this->logger !== null
            ? ($this->logger)($message)
            : fwrite(STDERR, $message . PHP_EOL);
    }

    private function msleep(int $milliseconds): void
    {
        if ($milliseconds > 0) {
            usleep($milliseconds * 1000);
        }
    }
}