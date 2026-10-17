<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Element\Get;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Symfony\Component\Serializer\Attribute\Ignore;

final class GetElementAttributeCommand extends W3CSessionCommand {
    public function __construct(
        #[Ignore]
        private string $elementId,
        #[Ignore]
        private string $attribute,
        ?string $sessionId = null
    )
    {
        return parent::__construct($sessionId);
    }

    public function method(): string
    {
        return static::GET_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/element/%s/attribute/%s", $this->sessionId, $this->elementId, $this->attribute);
    }
}