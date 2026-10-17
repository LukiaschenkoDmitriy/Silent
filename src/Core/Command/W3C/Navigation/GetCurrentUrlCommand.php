<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Navigation;

use Silent\Core\Command\W3C\W3CSessionCommand;

final class GetCurrentUrlCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/url", $this->sessionId);
    }
}