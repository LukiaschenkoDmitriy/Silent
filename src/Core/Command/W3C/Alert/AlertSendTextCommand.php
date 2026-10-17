<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Alert;

use Silent\Core\Command\W3C\W3CSessionCommand;

final class AlertSendTextCommand extends W3CSessionCommand {
    public function __construct(public string $text, ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/alert/text", $this->sessionId);
    }
}