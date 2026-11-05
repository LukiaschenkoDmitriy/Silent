<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Location;

use Exception;
use Override;
use Silent\Core\Command\W3C\Location\Exception\LocationNotSetException;
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

    public function exception(): ?Exception
    {
        return new LocationNotSetException();
    }
}