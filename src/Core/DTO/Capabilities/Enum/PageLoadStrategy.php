<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities\Enum;

enum PageLoadStrategy: string {
    case NONE = "none";
    case EAGER = "eager";
    case NORMAL = "normal";
}