<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\W3C;

use Silent\Core\Command\Scope\AbstractScope;
use Silent\Core\Command\W3C\Actions\PerformActionsCommand;
use Silent\Core\DTO\Actions\Actions;

class W3CActionsScope extends AbstractScope {
    public function performActions(Actions $actions): void
    {
        $this->e->execute(new PerformActionsCommand($actions, $this->s));
    }
}