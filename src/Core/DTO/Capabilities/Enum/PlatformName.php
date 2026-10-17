<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities\Enum;

enum PlatformName: string {
    case WINDOWS = "windows";
    case LINUX = "linux";
    case MAC = "mac";
    case ANDROID = "android";
    case IOS = "ios";
}