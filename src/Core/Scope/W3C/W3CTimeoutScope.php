<?php declare(strict_types=1);

namespace Silent\Core\Scope\W3C;

use Silent\Core\Scope\AbstractScope;
use Silent\Core\Command\W3C\Timeouts\GetTimeoutsCommand;
use Silent\Core\Command\W3C\Timeouts\SetTimeoutsCommand;
use Silent\Core\DTO\Capabilities\Timeouts;

class W3CTimeoutScope extends AbstractScope {
    public function set(Timeouts $timeouts): void
    {
        $this->e->execute(new SetTimeoutsCommand($timeouts, $this->s));
    }

    public function get(): Timeouts
    {
        return $this->e->execute(new GetTimeoutsCommand($this->s));
    }
}