<?php declare(strict_types=1);

namespace Silent\Core\Registry;

use Iterator;

interface RegistryInterface extends Iterator {
    public function add(string $key, mixed $value): void;
    public function remove(string $key): void;
    public function keys(): array;
    #[\ReturnTypeWillChange()]
    public function get(string $key): mixed;
    public function all(): array;
    public function merge(RegistryInterface $registry): void;
}