<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities\Enum;

enum ProxyType: string {
    case PAC = "pac";
    case DIRECT = "direct";
    case AUTODETECT = "autodetect";
    case SYSTEM = "system";
    case MANUAL = "manual";
}