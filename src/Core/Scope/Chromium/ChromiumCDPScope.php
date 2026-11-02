<?php declare(strict_types=1);

namespace Silent\Core\Scope\Chromium;

use Silent\Core\CDPExecutor\CDPExecutorInterface;
use Silent\Core\Command\CDP\CDPCommandInterface;

class ChromiumCDPScope {
    public function __construct(private CDPExecutorInterface $e) { }
    public function sendWithoutResult(CDPCommandInterface $command): void
    {
        $this->e->execute($command, true);
    }

    public function send(CDPCommandInterface $command): mixed
    {
        return $this->e->execute($command, false);
    }
}