<?php declare(strict_types=1);

namespace Silent\Core\ScopeBuilder;

final class Rule
{
    /** @var Trigger[] */
    public array $triggers = [];

    /** @var \Closure[] fn(object $event, WebDriverInterface $driver): bool */
    public array $conditions = [];

    public int $waitBeforeMs = 0;
    public int $waitAfterMs = 0;

    /** fn(WebDriverInterface $driver, object $event): bool */
    public ?\Closure $waitUntil = null;
    public int $waitUntilTimeoutMs = 5000;
    public int $waitUntilIntervalMs = 100;

    public ?int $remaining = null;

    public int $retries = 0;
    public int $retryDelayMs = 0;
    public int $debounceMs = 0;

    /** fn(\Throwable $e, object $event, WebDriverInterface $driver): void */
    public ?\Closure $onFailure = null;

    public ?string $group = null;

    public bool $running = false;

    public ?int $lastRunNs = null;

    public function __construct(
        public readonly \Closure $action,
        public ?string $name = null,
    ) {}

    public function label(): string
    {
        return $this->name ?? 'rule#' . spl_object_id($this);
    }
}