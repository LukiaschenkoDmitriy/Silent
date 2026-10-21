<?php declare(strict_types=1);

namespace Silent\Core\Module;

use Silent\Core\Registry\Registry;

class ModuleRegistry extends Registry {
    /**
     * Summary of add
     * @param string $key
     * @param ModuleInterface $value
     * @return void
     */
    public function add(string $key, mixed $value): void
    {
        parent::add($key, $value);
    }
    public function get(string $key): ?ModuleInterface
    {
        return parent::get($key);
    }
    /**
     * Summary of all
     * @return array<ModuleInterface>
     */
    public function all(): array
    {
        return parent::all();
    }
}