<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Window;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Window\Window;
use Silent\Core\DTO\Window\WindowType;

final class CreateWindowCommand extends W3CSessionCommand {
    public function __construct(public WindowType $type, ?string $sessionId = null) {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/window/new", $this->sessionId);
    }

    public function result(): ?string
    {
        return Window::class;
    }
}