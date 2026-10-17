<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Navigation;

use Silent\Core\Command\W3C\W3CSessionCommand;

final class NavigateForwardCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/forward", $this->sessionId);
    }

    public function transformParams(array $params): mixed
    {
        return new \stdClass();
    }
}