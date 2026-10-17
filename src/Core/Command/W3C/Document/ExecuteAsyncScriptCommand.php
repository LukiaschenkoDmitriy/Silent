<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Document;

use Silent\Core\Command\W3C\W3CSessionCommand;

final class ExecuteAsyncScriptCommand extends W3CSessionCommand {
    public function __construct(public string $script, public array $args = [], ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }

    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/execute/async", $this->sessionId);
    }
}