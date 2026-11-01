<?php declare(strict_types=1);

namespace Silent\Core\Command\CDP;

use Silent\Core\Command\CommandInterface;

interface CDPCommandInterface extends CommandInterface {
    public function command(): string;
    public function webSocketCommand(): bool;
}