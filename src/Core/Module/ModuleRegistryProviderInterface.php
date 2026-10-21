<?php declare(strict_types=1);

namespace Silent\Core\Module;

interface ModuleRegistryProviderInterface {
    public function modules(): ModuleRegistry;
}