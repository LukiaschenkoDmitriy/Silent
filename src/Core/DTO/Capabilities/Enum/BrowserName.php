<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities\Enum;

enum BrowserName: string {
    case CHROME = "chrome";
    case FIREFOX = "firefox";
    case MICROSOFT_EDGE = "MicrosoftEdge";
    case SAFARI = "safari";
}