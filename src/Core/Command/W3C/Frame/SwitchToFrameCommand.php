<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Frame;

use Silent\Core\Command\W3C\W3CSessionCommand;

final class SwitchToFrameCommand extends W3CSessionCommand {
    public function __construct(public array|string|int|null $id, ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/frame", $this->sessionId);
    }

    public function skipNullValue(): bool
    {
        return false;
    }
}