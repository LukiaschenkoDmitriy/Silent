<?php declare(strict_types=1);

namespace Silent\Core\Plugin;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;

interface PluginInterface {
    public function capabilities(Capabilities $capabilities, ChromeOptions $options): void;
    public function commands(): array;
}