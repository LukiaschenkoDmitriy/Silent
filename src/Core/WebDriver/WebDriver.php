<?php declare(strict_types=1);

namespace Silent\Core\WebDriver;

use Silent\Core\Command\W3C\Session\DeleteSessionCommand;
use Silent\Core\Command\W3C\Session\NewSessionCommand;
use Silent\Core\Command\W3C\StatusCommand;
use Silent\Core\Command\W3C\W3CCommandInterface;
use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\CapabilityMatch;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\DTO\Capabilities\Enum\BrowserName;
use Silent\Core\DTO\Session\Session;
use Silent\Core\DTO\Status\Status;
use Silent\Core\HttpExecutor\HttpExecutor;
use Silent\Core\Plugin\PluginInterface;
use Silent\Core\Plugin\PluginManager;
use Silent\Core\Plugin\PluginManagerInterface;
use Silent\Core\Plugin\PluginProviderInterface;

class WebDriver implements WebDriverExecutorInterface, WebDriverSessionInterface, PluginProviderInterface {
    private static string $url = "http://localhost:4444";
    private Session $session;
    private HttpExecutor $executor;
    private PluginManagerInterface $pluginManager;
    private Capabilities $capabilities;
    public function __construct(
        HttpExecutor $httpExecutor,
        ?Capabilities $capabilities = null, 
        ?Session $session = null,
        ?PluginManagerInterface $pluginManager = null
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
        $this->pluginManager = $pluginManager ?? new PluginManager();
    }

    public function initWebDriver(): WebDriver {
        if (isset($this->capabilities)) {
            if (!$this->capabilities->alwaysMatch) {
                $this->capabilities->alwaysMatch = new CapabilityMatch();
            }

            $options = $this->capabilities->alwaysMatch->chromeOptions ?? new ChromeOptions();
            $this->pluginManager->processOptions($options);

            $options = $this->capabilities->alwaysMatch->chromeOptions = $options;

            $this->session = $this->executor->executeW3C(new NewSessionCommand($this->capabilities));
        }

        $this->pluginManager->processCommand($this->executor, $this->session->sessionId);

        return $this;
    }

    public function executeW3C(W3CCommandInterface $w3CCommand): mixed
    {
        if ($w3CCommand instanceof W3CSessionCommand) {
            $w3CCommand->setSessionId($this->session->sessionId);
        }

        return $this->executor->executeW3C($w3CCommand);
    }

    public function getSession(): Session
    {
        return $this->session;
    }

    public function closeSession(): void
    {
        $this->executor->executeW3C(new DeleteSessionCommand($this->session->sessionId));
    }

    public function addPlugin(PluginInterface $plugin): void
    {
        $this->pluginManager->addPlugin($plugin);
    }

    public function removePlugin(string $pluginClass): void
    {
        $this->pluginManager->removePlugin($pluginClass);
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
            null,
            [
                new CapabilityMatch(BrowserName::CHROME),
                new CapabilityMatch(BrowserName::FIREFOX),
                new CapabilityMatch(BrowserName::MICROSOFT_EDGE),
                new CapabilityMatch(BrowserName::SAFARI)
            ],
        ));
    }

    public static function createFromSessionId(string $sessionId, ?string $url = null): self
    {
        /**
         * @var Status $status
         */
        $status = (new HttpExecutor($url ?? static::$url))->executeW3C(new StatusCommand());

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
        (new HttpExecutor(static::$url ?? $url))->executeW3C(new DeleteSessionCommand($sessionId));
    }

    public static function getFirstSession(?string $url = null): ?self
    {
        /**
         * @var Status $status
         */
        $executor = new HttpExecutor($url ?? static::$url);
        $status = $executor->executeW3C(new StatusCommand());

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
        $status = $executor->executeW3C(new StatusCommand());

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

    public static function setUrl(string $url): void
    {
        self::$url = $url;
    }
}