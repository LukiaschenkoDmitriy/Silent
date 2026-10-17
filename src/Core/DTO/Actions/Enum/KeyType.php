<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Enum;

enum KeyType: string {
    case KEY_DOWN = "keyDown";
    case KEY_UP = "keyUp";
}