<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Actions;

use Override;
use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Actions\Actions;

final class PerformActionsCommand extends W3CSessionCommand {
    public function __construct(
        public Actions $actions, 
        ?string $sessionId = null
    )
    {
        return parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/actions", $this->sessionId);
    }

    public function transformParams(array $params): mixed
    {
        return $params["actions"];
    }
}