<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Timeouts;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Capabilities\Timeouts;

final class GetTimeoutsCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/timeouts", $this->sessionId);
    }

    public function result(): string
    {
        return Timeouts::class;
    }
}