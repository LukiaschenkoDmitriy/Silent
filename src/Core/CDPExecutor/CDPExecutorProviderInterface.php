<?php declare(strict_types=1);

namespace Silent\Core\CDPExecutor;

use Silent\Core\Command\CDP\CDPCommandInterface;

interface CDPExecutorProviderInterface {
    public function executeCDP(CDPCommandInterface $command): mixed;
}