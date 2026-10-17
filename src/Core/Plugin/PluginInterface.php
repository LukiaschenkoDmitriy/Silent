<?php declare(strict_types=1);

namespace Silent\Core\Plugin;

use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;

interface PluginInterface {
    public function options(ChromeOptions $options): void;
    public function commands(): array;
}