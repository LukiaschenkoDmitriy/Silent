<?php declare(strict_types=1);

namespace Silent\Core\Command\Chromium\CDP;

use Silent\Core\Command\W3C\W3CSessionCommand;

class SendWithResultCommand extends W3CSessionCommand {
    public function __construct(
        public string $cmd,
        public array $params = [],
        ?string $sessionId = null
    )
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/chromium/send_command_and_get_result", $this->sessionId);
    }
    
    public function transformParams(array $params): mixed
    {
        if (empty($params["params"])) {
            $params["params"] = new \stdClass();
        }

        return $params;
    }
}