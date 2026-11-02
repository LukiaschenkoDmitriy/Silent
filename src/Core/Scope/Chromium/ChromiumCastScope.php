<?php declare(strict_types=1);

namespace Silent\Core\Scope\Chromium;

use Silent\Core\Command\Chromium\Cast\CastDesktopCommand;
use Silent\Core\Command\Chromium\Cast\CastGetSinksCommand;
use Silent\Core\Command\Chromium\Cast\CastTabCommand;
use Silent\Core\Command\Chromium\Cast\SetSinkToUserCommand;
use Silent\Core\Command\Chromium\Cast\StopCastCommand;
use Silent\Core\Scope\AbstractScope;
use Silent\Core\DTO\Cast\CastSink;

class ChromiumCastScope extends AbstractScope {
    public function desktop(string $sinkName): void
    {
        $this->e->execute(new CastDesktopCommand($sinkName, $this->s));
    }

    /**
     * Summary of getSinks
     * @return array<CastSink>
     */
    public function getSinks(): array
    {
        return $this->e->execute(new CastGetSinksCommand($this->s));
    }

    public function tab(string $sinkName): void
    {
        $this->e->execute(new CastTabCommand($sinkName, $this->s));
    }

    public function setSink(string $sinkName): void
    {
        $this->e->execute(new SetSinkToUserCommand($sinkName, $this->s));
    }

    public function stop(string $sinkName): void
    {
        $this->e->execute(new StopCastCommand($sinkName, $this->s));
    }
}