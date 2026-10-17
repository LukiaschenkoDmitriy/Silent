<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Window;

use Silent\Core\Command\W3C\W3CSessionCommand;

final class SwitchToWindowCommand extends W3CSessionCommand {
    public function __construct(public string $handle, ?string $sessionId = null)
    {
        return parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/window", $this->sessionId);
    }
}