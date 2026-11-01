<?php declare(strict_types=1);

namespace Silent\Core\Command\Chromium\Cast;

use Silent\Core\Command\W3C\W3CSessionCommand;

class CastTabCommand extends W3CSessionCommand {
    public function __construct(public string $sinkName, ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/goog/cast/start_tab_mirroring", $this->sessionId);
    }
}