<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Window;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Window\WindowRect;

final class FullscreenWindowCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/window/fullscreen", $this->sessionId);
    }

    public function result(): ?string
    {
        return WindowRect::class;
    }

    public function transformParams(array $params): mixed
    {
        return new \stdClass();
    }
}