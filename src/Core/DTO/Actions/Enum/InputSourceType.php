<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Enum;

enum InputSourceType: string {
    case KEY = "key";
    case POINTER = "pointer";
    case WHEEL = "wheel";
    case NONE = "none";
}