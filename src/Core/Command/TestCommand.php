<?php declare(strict_types=1);

namespace Silent\Core\Command;

use Override;
use Silent\Core\Command\W3C\W3CSessionCommand;

class TestCommand extends W3CSessionCommand {
    #[Override]
    public function method(): string
    {
        return static::GET_METHOD;
    }

    #[Override]
    public function url(): string
    {
        return sprintf("/session/%s/application_cache/status", $this->sessionId);
    }
}