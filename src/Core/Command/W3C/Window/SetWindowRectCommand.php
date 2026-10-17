<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Window;

use Override;
use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Window\WindowRect;

final class SetWindowRectCommand extends W3CSessionCommand {
    public function __construct(public WindowRect $rect, ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/window/rect", $this->sessionId);
    }

    public function result(): ?string
    {
        return WindowRect::class;
    }

    public function transformParams(array $params): mixed
    {
        return $params["rect"];
    }
}