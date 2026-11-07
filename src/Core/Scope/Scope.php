<?php declare(strict_types=1);

namespace Silent\Core\Scope;

use Silent\Core\CDPExecutor\CDPExecutor;
use Silent\Core\Scope\Chromium\ChromiumScope;
use Silent\Core\Scope\W3C\Element\W3CElementScope;
use Silent\Core\Scope\W3C\W3CActionsScope;
use Silent\Core\Scope\W3C\W3CAlertScope;
use Silent\Core\Scope\W3C\W3CCookieScope;
use Silent\Core\Scope\W3C\W3CDocumentScope;
use Silent\Core\Scope\W3C\W3CFrameScope;
use Silent\Core\Scope\W3C\W3CLocationScope;
use Silent\Core\Scope\W3C\W3CNavigationScope;
use Silent\Core\Scope\W3C\W3CScreenshotScope;
use Silent\Core\Scope\W3C\W3CTimeoutScope;
use Silent\Core\Scope\W3C\W3CWindowScope;
use Silent\Core\Command\W3C\Session\DeleteSessionCommand;
use Silent\Core\Command\W3C\Session\NewSessionCommand;
use Silent\Core\Command\W3C\StatusCommand;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Session\Session;
use Silent\Core\DTO\Status\Status;
use Silent\Core\WebDriver\WebDriverInterface;

class Scope extends AbstractScope {
    public W3CActionsScope $actions;
    public W3CAlertScope $alert;
    public W3CCookieScope $cookie;
    public W3CDocumentScope $document;
    public W3CElementScope $element;
    public W3CFrameScope $frame;
    public W3CLocationScope $location;
    public W3CNavigationScope $navigation;
    public W3CScreenshotScope $screenshot;
    public W3CTimeoutScope $timeout;
    public W3CWindowScope $window;
    public ChromiumScope $chromium;
    public function __construct(WebDriverInterface $webdriver) {        
        parent::__construct($webdriver);

        $this->actions = new W3CActionsScope($webdriver);
        $this->alert = new W3CAlertScope($webdriver);
        $this->cookie = new W3CCookieScope($webdriver);
        $this->document = new W3CDocumentScope($webdriver);
        $this->element = new W3CElementScope($webdriver);
        $this->frame = new W3CFrameScope($webdriver);
        $this->location = new W3CLocationScope($webdriver);
        $this->navigation = new W3CNavigationScope($webdriver);
        $this->screenshot = new W3CScreenshotScope($webdriver);
        $this->timeout = new W3CTimeoutScope($webdriver);
        $this->window = new W3CWindowScope($webdriver);
        $this->chromium = new ChromiumScope($webdriver);
    }

    public function getStatus(): Status
    {
        return $this->e->execute(new StatusCommand());
    }

    public function newSession(Capabilities $capabilities): Session
    {
        return $this->e->execute(new NewSessionCommand($capabilities));
    }

    public function deleteSession(string $sessionId): void
    {
        $this->e->execute(new DeleteSessionCommand($sessionId));
    }
}