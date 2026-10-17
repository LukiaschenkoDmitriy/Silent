<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Cookie;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Cookie\Cookie;

final class GetCookiesCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/cookie", $this->sessionId);
    }

    public function result(): ?string
    {
        return sprintf("%s[]", Cookie::class);
    }
}