<?php declare(strict_types=1);

namespace Silent\Core\DTO\Network;

enum NetworkPreset: string {
    case GPRS = 'GPRS';
    case Regular2G = 'Regular 2G';
    case Good2G = 'Good 2G';
    case Regular3G = 'Regular 3G';
    case Good3G = 'Good 3G';
    case Regular4G = 'Regular 4G';
    case DSL = 'DSL';
    case WiFi = 'WiFi';
}