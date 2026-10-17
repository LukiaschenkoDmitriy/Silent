<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Pointer;

use Silent\Core\DTO\Actions\Enum\PointerActionType;

final class PointerCancelEvent {
    public const TYPE = PointerActionType::POINTER_CANCEL;
}