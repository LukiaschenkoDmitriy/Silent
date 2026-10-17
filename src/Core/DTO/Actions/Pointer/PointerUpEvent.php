<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Pointer;

use Silent\Core\DTO\Actions\Enum\ButtonType;
use Silent\Core\DTO\Actions\Enum\PointerActionType;

final class PointerUpEvent {
    public const TYPE = PointerActionType::POINTER_UP;
    public function __construct(
        public ButtonType $button
    ) {}
}