<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Element\Find;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Element\FindConstants;
use Silent\Core\DTO\Element\FindStrategy;
use Symfony\Component\Serializer\Attribute\SerializedName;

final class FindElementsCommand extends W3CSessionCommand {
    public function __construct(
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
        return sprintf("/session/%s/elements", $this->sessionId);
    }

    public function transformResult(array $data): mixed
    {
        return array_map(fn($e) => $e[FindConstants::ELEMENT], parent::transformResult($data));
    }
}