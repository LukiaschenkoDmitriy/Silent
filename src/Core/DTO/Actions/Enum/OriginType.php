<?php declare(strict_types=1);

namespace Silent\Core\DTO\Actions\Enum;

enum OriginType :string {
    case VIEWPORT = "viewport";
    case POINTER = "pointer";
}