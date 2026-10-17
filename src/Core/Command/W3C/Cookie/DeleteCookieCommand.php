<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Cookie;

use Override;
use Silent\Core\Command\W3C\W3CSessionCommand;
use Symfony\Component\Serializer\Attribute\Ignore;

final class DeleteCookieCommand extends W3CSessionCommand {
    public function __construct(#[Ignore] private string $name, ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::DELETE_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/cookie/%s", $this->sessionId, $this->name);
    }
}