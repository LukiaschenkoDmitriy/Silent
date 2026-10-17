<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Navigation;

use Silent\Core\Command\W3C\W3CSessionCommand;

final class NavigateToCommand extends W3CSessionCommand {
    public function __construct(public string $url, ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }

    public function getUrl(): string {
        return $this->url;
    }

    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/url", $this->sessionId);
    }
}