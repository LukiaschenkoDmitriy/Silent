<?php declare(strict_types=1);

namespace Silent\Core\Plugin;

use Silent\Core\Registry\Registry;

class PluginRegistry extends Registry {
    /**
     * Summary of add
     * @param string $key
     * @param PluginInterface $value
     * @return void
     */
    public function add(string $key, mixed $value): void
    {
        parent::add($key, $value);
    }

    public function get(string $key): ?PluginInterface
    {
        return parent::get($key);
    }

    /**
     * Summary of all
     * @return array<PluginInterface>
     */
    public function all(): array
    {
        return parent::all();
    }
}