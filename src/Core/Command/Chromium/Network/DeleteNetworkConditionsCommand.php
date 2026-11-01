<?php declare(strict_types=1);

namespace Silent\Core\Command\Chromium\Network;

use Silent\Core\Command\W3C\W3CSessionCommand;

class DeleteNetworkConditionsCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::DELETE_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/chromium/network_conditions", $this->sessionId);
    }
}