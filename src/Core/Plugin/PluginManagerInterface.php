<?php declare(strict_types=1);

namespace Silent\Core\Plugin;

use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\HttpExecutor\HttpExecutor;

interface PluginManagerInterface {
    /**
     * Summary of getPlugins
     * @return array<PluginInterface>
     */
    public function getPlugins(): array;
    public function addPlugin(PluginInterface $plugin): void;
    public function removePlugin(string $pluginClass): void;
    public function processOptions(ChromeOptions $options): void;
    public function processCommand(HttpExecutor $httpExecutor, string $sessionId): array;
}