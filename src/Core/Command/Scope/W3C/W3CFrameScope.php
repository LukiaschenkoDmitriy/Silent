<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\W3C;

use Silent\Core\Command\Scope\AbstractScope;
use Silent\Core\Command\W3C\Frame\SwitchToFrameCommand;
use Silent\Core\Command\W3C\Frame\SwitchToParentFrameCommand;

class W3CFrameScope extends AbstractScope {
    public function switchTo(array|string|int|null $id): void
    {
        $this->e->execute(new SwitchToFrameCommand($id, $this->s));
    }

    public function switchToParent(): void
    {
        $this->e->execute(new SwitchToParentFrameCommand($this->s));
    }
}