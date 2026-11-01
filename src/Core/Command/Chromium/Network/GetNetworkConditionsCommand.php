<?php declare(strict_types=1);

namespace Silent\Core\Command\Chromium\Network;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Network\NetworkConditions;

class GetNetworkConditionsCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/chromium/network_conditions", $this->sessionId);
    }

    public function result(): ?string
    {
        return NetworkConditions::class;
    }
}