<?php declare(strict_types=1);

namespace Silent\Core\Scope\W3C;

use Silent\Core\Scope\AbstractScope;
use Silent\Core\Command\W3C\Navigation\GetCurrentUrlCommand;
use Silent\Core\Command\W3C\Navigation\NavigateBackCommand;
use Silent\Core\Command\W3C\Navigation\NavigateForwardCommand;
use Silent\Core\Command\W3C\Navigation\NavigateToCommand;
use Silent\Core\Command\W3C\Navigation\RefreshPageCommand;

class W3CNavigationScope extends AbstractScope {
    public function currentUrl(): string
    {
        return $this->e->execute(new GetCurrentUrlCommand($this->s));
    }

    public function back(): void
    {
        $this->e->execute(new NavigateBackCommand($this->s));
    }

    public function forward(): void
    {
        $this->e->execute(new NavigateForwardCommand($this->s));
    }

    public function to(string $url): void
    {
        $this->e->execute(new NavigateToCommand($url, $this->s));
    }

    public function refresh(): void
    {
        $this->e->execute(new RefreshPageCommand($this->s));
    }
}