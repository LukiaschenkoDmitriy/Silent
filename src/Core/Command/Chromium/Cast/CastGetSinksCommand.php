<?php declare(strict_types=1);

namespace Silent\Core\Command\Chromium\Cast;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Cast\CastSink;

class CastGetSinksCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/goog/cast/get_sinks", $this->sessionId);
    }

    public function result(): ?string
    {
        return CastSink::class . "[]";
    }
}