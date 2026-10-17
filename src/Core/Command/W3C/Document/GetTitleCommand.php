<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Document;

use Silent\Core\Command\W3C\W3CSessionCommand;

final class GetTitleCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/title", $this->sessionId);
    }
}