<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Element\Action;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Symfony\Component\Serializer\Attribute\Ignore;

final class ElementClearCommand extends W3CSessionCommand {
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
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/element/%s/clear", $this->sessionId, $this->elementId);
    }

    public function transformParams(array $params): mixed
    {
        return new \stdClass();
    }
}