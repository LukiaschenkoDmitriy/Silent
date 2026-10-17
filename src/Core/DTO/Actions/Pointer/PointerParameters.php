<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Pointer;

use Silent\Core\DTO\Actions\Enum\PointerType;

final class PointerParameters {
    public function __construct(
        public PointerType $pointerType
    ) {}
}