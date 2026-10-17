<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Enum;

enum ButtonType: int {
    case LEFT = 0;
    case MIDDLE = 1;
    case RIGHT = 2;
}