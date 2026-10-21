<?php declare(strict_types=1);

namespace Silent\Core\Plugin;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;

abstract class Plugin implements PluginInterface {
    private mixed $params = null;
    public function capabilities(Capabilities $capabilities, ChromeOptions $options): void { }
    public function commands(): array { return []; }
    public function getParams(): mixed
    {
        return $this->params;
    }
    public function setParams(mixed $params): void
    {
        $this->params = $params;
    }
}