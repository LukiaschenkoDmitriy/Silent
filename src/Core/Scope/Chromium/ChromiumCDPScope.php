<?php declare(strict_types=1);

namespace Silent\Core\Scope\Chromium;

use Silent\Core\CDPExecutor\CDPExecutor;
use Silent\Core\CDPExecutor\CDPExecutorInterface;
use Silent\Core\Command\CDP\CDPCommandInterface;
use Silent\Core\Scope\AbstractScope;
use Silent\Core\WebDriver\WebDriverInterface;

class ChromiumCDPScope extends AbstractScope {
    private CDPExecutorInterface $cdp;
    public function __construct(WebDriverInterface $webdriver) {
        parent::__construct($webdriver);

        $this->cdp = new CDPExecutor($this->e, $this->s);
    }  
    public function sendWithoutResult(CDPCommandInterface $command): void
    {
        $this->cdp->execute($command, true);
    }

    public function send(CDPCommandInterface $command): mixed
    {
        return $this->cdp->execute($command, false);
    }
}