<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Element\Action;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Symfony\Component\Serializer\Attribute\Ignore;

final class ElementChangeValueCommand extends W3CSessionCommand {
    public function __construct(
        #[Ignore]
        private string $elementId,
        public string $text,
        ?string $sessionId = null
    )
    {
        return parent::__construct($sessionId);
    }

    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/element/%s/value", $this->sessionId, $this->elementId);
    }
}