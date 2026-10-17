<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Element;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Symfony\Component\Serializer\Attribute\Ignore;

final class IsElementSelectedCommand extends W3CSessionCommand {
    public function __construct(#[Ignore] private string $elementId, ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/element/%s/selected", $this->sessionId, $this->elementId);
    }
}