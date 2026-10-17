<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Pointer;

use Silent\Core\DTO\Actions\Enum\InputSourceType;

final class PointerActions {
    public const TYPE = InputSourceType::POINTER;
    public function __construct(
        public string $id,
        public PointerParameters $parameters,
        public array $actions
    ) {}
}