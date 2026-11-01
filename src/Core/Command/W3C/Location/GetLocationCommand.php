<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Location;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Location\Location;

class GetLocationCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/location", $this->sessionId);
    }

    public function result(): ?string
    {
        return Location::class;
    }
}