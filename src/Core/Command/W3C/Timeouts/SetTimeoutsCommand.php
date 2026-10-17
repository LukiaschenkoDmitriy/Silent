<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Timeouts;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Capabilities\Timeouts;

final class SetTimeoutsCommand extends W3CSessionCommand {
    public function __construct(public Timeouts $timeouts, ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/timeouts", $this->sessionId);
    }

    public function transformParams(array $params): array
    {
        return $params["timeouts"];
    }
}