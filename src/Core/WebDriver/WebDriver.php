<?php declare(strict_types=1);

namespace Silent\Core\WebDriver;

use Silent\Core\CDPExecutor\CDPExecutor;
use Silent\Core\CDPExecutor\CDPExecutorInterface;
use Silent\Core\Command\CDP\CDPCommandInterface;
use Silent\Core\Scope\Scope;
use Silent\Core\Command\W3C\Session\DeleteSessionCommand;
use Silent\Core\Command\W3C\Session\NewSessionCommand;
use Silent\Core\Command\W3C\StatusCommand;
use Silent\Core\Command\W3C\W3CCommandInterface;
use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\CapabilityMatch;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\DTO\Session\Session;
use Silent\Core\DTO\Status\Status;
use Silent\Core\HttpExecutor\HttpExecutor;
use Silent\Core\HttpExecutor\HttpExecutorInterface;
use Silent\Core\ScopeBuilder\ScopeBuilder;
use Silent\Core\WebDriver\Events\AfterCreateSessionEvent;
use Silent\Core\WebDriver\Events\BeforeCreateSessionEvent;
use Silent\Core\WebSocket\WebSocket;
use Silent\Core\WebSocket\WebSocketInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class WebDriver implements WebDriverInterface {
    private static string $url = "http://localhost:4444";
    private Session $session;
    private HttpExecutorInterface $executor;
    private CDPExecutorInterface $cdpExecutor;
    private WebSocketInterface $ws;
    private EventDispatcherInterface $dispatcher;
    private Capabilities $capabilities;
    private Scope $actions;
    public function __construct(
        HttpExecutorInterface $httpExecutor,
        ?Capabilities $capabilities = null, 
        ?Session $session = null,
    )
    {
        if ($session) {
            $this->session = $session;
        } else {
            $this->capabilities = $capabilities;
        }

        if (!$session && !$capabilities) {
            throw new \Exception("Provide Session or Capabilities");
        }
        
        $this->executor = $httpExecutor;

        if (isset($this->session)) {
            $this->cdpExecutor = new CDPExecutor($httpExecutor, $session->sessionId);
            $this->ws = new WebSocket($this->session->capabilities->seCdp, $httpExecutor->serializer());
            $this->actions = new Scope($this->cdpExecutor, $this->executor, $this->session->sessionId);
        }
    }

    public function setEventDispatcher(EventDispatcherInterface $dispatcher): void
    {
        $this->dispatcher = $dispatcher;
        $this->executor->setEventDispatcher($dispatcher);
    }

    public function actions(): Scope
    {
        return $this->actions;
    }

    public function builder(): ScopeBuilder
    {
        if (!isset($this->dispatcher)) {
            throw new \Exception(sprintf("Neccessary initialize dispatcher to use builder"));
        }

        return new ScopeBuilder($this->dispatcher, $this);
    }

    public function getExecutor(): HttpExecutorInterface
    {
        return $this->executor;
    }

    public function getCapabilitites(): ?Capabilities {
        return isset($this->capabilities) ? $this->capabilities : null;
    }

    public function init(): WebDriver {
        if (isset($this->capabilities)) {
            if (!$this->capabilities->alwaysMatch) {
                $this->capabilities->alwaysMatch = new CapabilityMatch();
                $this->capabilities->alwaysMatch->chromeOptions = new ChromeOptions();
            }

            if (isset($this->dispatcher)) {
                $this->dispatcher->dispatch(new BeforeCreateSessionEvent($this->capabilities, $this->capabilities->alwaysMatch->chromeOptions));
            }

            $this->session = $this->executor->execute(new NewSessionCommand($this->capabilities));

            if (!isset($this->cdpExecutor)) {
                $this->cdpExecutor = new CDPExecutor($this->executor, $this->session->sessionId);
            }

            if (!isset($this->actions)) {
                $this->actions = new Scope($this->cdpExecutor, $this->executor, $this->session->sessionId);
            }

            if (!isset($this->ws)) {
                $this->ws = new WebSocket($this->session->capabilities->seCdp, $this->executor->serializer());
            }

            if (isset($this->dispatcher)) {
                $this->dispatcher->dispatch(new AfterCreateSessionEvent($this->session, $this));
            }
        }

        return $this;
    }

    public function executeW3C(W3CCommandInterface $w3CCommand): mixed
    {
        if (!isset($this->session)) {
            throw new \Exception("Session not found, run Webdriver->init() to create session");
        }        

        if ($w3CCommand instanceof W3CSessionCommand) {
            $w3CCommand->setSessionId($this->session->sessionId);
        }

        return $this->executor->execute($w3CCommand);
    }

    public function executeCDP(CDPCommandInterface $command): mixed
    {
        if (!isset($this->session)) {
            throw new \Exception("Session not found, run Webdriver->init() to create session");
        }

        return $this->cdpExecutor->execute($command);
    }

    public function executeWS(CDPCommandInterface $command): mixed
    {
        if (!isset($this->session)) {
            throw new \Exception("Session not found, run Webdriver->init() to create session");
        }
        
        $this->ws->execute($command);

        echo "Websocket connected, Ctrl+C to exit";

        while (true) {
            sleep(1);
        }
    }

    public function getSession(): Session
    {
        return $this->session;
    }

    public function closeSession(): void
    {
        $this->executor->execute(new DeleteSessionCommand($this->session->sessionId));
    }

    public static function createSession(Capabilities $capabilities, ?string $url = null): self
    {
        return new self(new HttpExecutor($url ?? static::$url), capabilities: $capabilities);
    }

    public static function createFromSession(Session $session, ?string $url = null): self
    {
        return new self(new HttpExecutor($url ?? static::$url), session: $session);
    }

    public static function createSessionWithMinimalCapabilities(?string $url = null): self
    {
        return new self(new HttpExecutor($url ?? static::$url), new Capabilities(
            new CapabilityMatch()
        ));
    }

    public static function createFromSessionId(string $sessionId, ?string $url = null): self
    {
        /**
         * @var Status $status
         */
        $status = (new HttpExecutor($url ?? static::$url))->execute(new StatusCommand());

        foreach ($status->nodes as $node) {
            foreach ($node->slots as $slot) {
                if (!$slot->session) continue;
                if ($slot->session->sessionId === $sessionId) {
                    return new self(new HttpExecutor($url ?? static::$url), session: $slot->session);
                }
            }
        }

        throw new \RuntimeException("Session with id $sessionId not found");
    }

    public static function cloaseSessionById(string $sessionId, ?string $url = null): void
    {
        (new HttpExecutor(static::$url ?? $url))->execute(new DeleteSessionCommand($sessionId));
    }

    public static function getFirstSession(?string $url = null): ?self
    {
        /**
         * @var Status $status
         */
        $executor = new HttpExecutor($url ?? static::$url);
        $status = $executor->execute(new StatusCommand());

        foreach ($status->nodes as $node) {
            foreach ($node->slots as $slot) {
                if (!$slot->session) continue;
                return new self($executor, session: $slot->session);
            }
        }

        return null;
    }

    /**
     * Summary of getSessions
     * @param mixed $url
     * @return WebDriver[]
     */
    public static function getSessions(?string $url = null): array
    {
        /**
         * @var Status $status
         */
        $executor = new HttpExecutor($url ?? static::$url);
        $status = $executor->execute(new StatusCommand());

        $sessions = [];
        foreach ($status->nodes as $node) {
            foreach ($node->slots as $slot) {
                if (!$slot->session) continue;
                $sessions[] = new self($executor, session: $slot->session);
            }
        }

        return $sessions;
    }

    public static function closeAllSessions(?string $url = null): void
    {
        $sessions = self::getSessions($url);
        foreach ($sessions as $session) {
            $session->closeSession();
        }        
    }

    public static function setHub(string $hub): void
    {
        self::$url = $hub;
    }
}