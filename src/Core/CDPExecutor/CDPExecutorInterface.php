<?php declare(strict_types=1);

namespace Silent\Core\CDPExecutor;

use Silent\Core\Command\CDP\CDPCommandInterface;

interface CDPExecutorInterface {
    public function execute(CDPCommandInterface $command, bool $withoutResult = false): mixed;
}