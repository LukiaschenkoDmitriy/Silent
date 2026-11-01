<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\W3C;

use Silent\Core\Command\Scope\AbstractScope;
use Silent\Core\Command\W3C\Window\CloseCurrentWindowCommand;
use Silent\Core\Command\W3C\Window\CreateWindowCommand;
use Silent\Core\Command\W3C\Window\FullscreenWindowCommand;
use Silent\Core\Command\W3C\Window\GetCurrentWindowCommand;
use Silent\Core\Command\W3C\Window\GetWindowHandlesCommand;
use Silent\Core\Command\W3C\Window\GetWindowRectCommand;
use Silent\Core\Command\W3C\Window\MaximizeWindowCommand;
use Silent\Core\Command\W3C\Window\SetWindowRectCommand;
use Silent\Core\Command\W3C\Window\SwitchToWindowCommand;
use Silent\Core\DTO\Window\Window;
use Silent\Core\DTO\Window\WindowRect;
use Silent\Core\DTO\Window\WindowType;

class W3CWindowScope extends AbstractScope {
    public function closeCurrent(): void
    {
        $this->e->execute(new CloseCurrentWindowCommand($this->s));
    }

    public function create(WindowType $type): Window
    {
        return $this->e->execute(new CreateWindowCommand($type, $this->s));
    }

    public function fullscreen(): WindowRect
    {
        return $this->e->execute(new FullscreenWindowCommand($this->s));
    }

    public function getCurrent(): string
    {
        return $this->e->execute(new GetCurrentWindowCommand($this->s));
    }

    /**
     * Summary of getHandles
     * @return array<string>
     */
    public function getHandles(): array
    {
        return $this->e->execute(new GetWindowHandlesCommand($this->s));
    }

    public function getRect(): WindowRect
    {
        return $this->e->execute(new GetWindowRectCommand($this->s));
    }

    public function maximize(): WindowRect
    {
        return $this->e->execute(new MaximizeWindowCommand($this->s));
    }

    public function setRect(WindowRect $rect): WindowRect
    {
        return $this->e->execute(new SetWindowRectCommand($rect, $this->s));
    }

    public function switchTo(string $handle): void
    {
        $this->e->execute(new SwitchToWindowCommand($handle, $this->s));
    }
}