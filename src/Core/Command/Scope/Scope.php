<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope;

use Silent\Core\CDPExecutor\CDPExecutorInterface;
use Silent\Core\Command\Scope\Chromium\ChromiumScope;
use Silent\Core\Command\Scope\W3C\Element\W3CElementScope;
use Silent\Core\Command\Scope\W3C\W3CActionsScope;
use Silent\Core\Command\Scope\W3C\W3CAlertScope;
use Silent\Core\Command\Scope\W3C\W3CCookieScope;
use Silent\Core\Command\Scope\W3C\W3CDocumentScope;
use Silent\Core\Command\Scope\W3C\W3CFrameScope;
use Silent\Core\Command\Scope\W3C\W3CLocationScope;
use Silent\Core\Command\Scope\W3C\W3CNavigationScope;
use Silent\Core\Command\Scope\W3C\W3CScreenshotScope;
use Silent\Core\Command\Scope\W3C\W3CTimeoutScope;
use Silent\Core\Command\Scope\W3C\W3CWindowScope;
use Silent\Core\Command\W3C\Session\DeleteSessionCommand;
use Silent\Core\Command\W3C\Session\NewSessionCommand;
use Silent\Core\Command\W3C\StatusCommand;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Session\Session;
use Silent\Core\DTO\Status\Status;
use Silent\Core\HttpExecutor\HttpExecutorInterface;

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
    public function __construct(
        CDPExecutorInterface $cdpExecutor,
        private HttpExecutorInterface $executor, 
        private string $sessionId
    ) {
        parent::__construct($executor, $sessionId);

        $this->actions = new W3CActionsScope($executor, $sessionId);
        $this->alert = new W3CAlertScope($executor, $sessionId);
        $this->cookie = new W3CCookieScope($executor, $sessionId);
        $this->document = new W3CDocumentScope($executor, $sessionId);
        $this->element = new W3CElementScope($executor, $sessionId);
        $this->frame = new W3CFrameScope($executor, $sessionId);
        $this->location = new W3CLocationScope($executor, $sessionId);
        $this->navigation = new W3CNavigationScope($executor, $sessionId);
        $this->screenshot = new W3CScreenshotScope($executor, $sessionId);
        $this->timeout = new W3CTimeoutScope($executor, $sessionId);
        $this->window = new W3CWindowScope($executor, $sessionId);
        $this->chromium = new ChromiumScope($cdpExecutor, $executor, $sessionId);
    }

    public function getStatus(): Status
    {
        return $this->executor->execute(new StatusCommand());
    }

    public function newSession(Capabilities $capabilities): Session
    {
        return $this->executor->execute(new NewSessionCommand($capabilities));
    }

    public function deleteSession(string $sessionId): void
    {
        $this->executor->execute(new DeleteSessionCommand($sessionId));
    }
}