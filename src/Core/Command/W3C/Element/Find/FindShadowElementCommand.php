<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Element\Find;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Element\FindConstants;
use Symfony\Component\Serializer\Attribute\Ignore;

final class FindShadowElementCommand extends W3CSessionCommand {
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
        return sprintf("/session/%s/element/%s/shadow", $this->sessionId, $this->elementId);
    }

    public function transformResult(array $data): mixed
    {
        return parent::transformResult($data)[FindConstants::SHADOW_ROOT];
    }
}
