<?php declare(strict_types=1);

namespace Silent\Core\Plugin;

interface PluginRegistryProviderInterface {
    public function plugins(): PluginRegistry;
}