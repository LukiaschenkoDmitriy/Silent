<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Session;

use Silent\Core\Command\W3C\W3CSessionCommand;

class DeleteSessionCommand extends W3CSessionCommand
{
    public function method(): string
    {
        return static::DELETE_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s", $this->sessionId);
    }
}