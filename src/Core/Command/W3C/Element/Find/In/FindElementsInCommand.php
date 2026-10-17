<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Element\Find\In;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Element\FindConstants;
use Silent\Core\DTO\Element\FindStrategy;
use Symfony\Component\Serializer\Attribute\Ignore;
use Symfony\Component\Serializer\Attribute\SerializedName;

final class FindElementsInCommand extends W3CSessionCommand {
    public function __construct(
        #[Ignore]
        private string $elementId,
        #[SerializedName("using")]
        public FindStrategy $strategy,
        public string $value,
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
        return sprintf("/session/%s/element/%s/elements", $this->sessionId, $this->elementId);
    }

    public function transformResult(array $data): mixed
    {
        return array_map(fn($e) => $e[FindConstants::ELEMENT], parent::transformResult($data));
    }
}