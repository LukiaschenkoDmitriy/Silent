<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Enum;

enum PointerActionType: string {
    case POINTER_MOVE = "pointerMove";
    case POINTER_DOWN = "pointerDown";
    case POINTER_UP = "pointerUp";
    case POINTER_CANCEL = "pointerCancel";
}