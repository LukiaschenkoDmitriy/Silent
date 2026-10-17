<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Window;

use Silent\Core\Command\W3C\W3CSessionCommand;

final class CloseCurrentWindowCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::DELETE_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/window", $this->sessionId);
    }
}