<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Enum;

enum PointerType: string {
    case MOUSE = "mouse";
    case PEN = "pen";
    case TOUCH = "touch";
}