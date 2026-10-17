<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Pointer;

use Silent\Core\DTO\Actions\Enum\ButtonType;
use Silent\Core\DTO\Actions\Enum\PointerActionType;

final class PointerDownEvent {
    public const TYPE =  PointerActionType::POINTER_DOWN;
    public function __construct(
        public ButtonType $button
    ) {}
}