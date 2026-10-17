<?php declare(strict_types=1);

namespace Silent\Core\Plugin;

interface PluginProviderInterface {
    public function addPlugin(PluginInterface $plugin): void;
    public function removePlugin(string $pluginClass): void;
}