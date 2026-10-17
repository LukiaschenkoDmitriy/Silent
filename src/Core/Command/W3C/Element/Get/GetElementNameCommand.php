<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Element\Get;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Symfony\Component\Serializer\Attribute\Ignore;

final class GetElementNameCommand extends W3CSessionCommand {
    public function __construct(
        #[Ignore]
        private string $elementId,
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
        return sprintf("/session/%s/element/%s/name", $this->sessionId, $this->elementId);
    }
}