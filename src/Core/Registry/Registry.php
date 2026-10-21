<?php declare(strict_types=1);

namespace Silent\Core\Registry;

use Override;

abstract class Registry implements RegistryInterface {
    private array $elements = [];
    private int $position = 0;

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function current(): mixed
    {
        return $this->elements[$this->keys()[$this->position]];
    }

    public function key(): mixed
    {
        return $this->keys()[$this->position];
    }

    public function next(): void {
        ++$this->position;
    }

    public function valid(): bool
    {
        return in_array($this->position, array_keys($this->keys()));
    }

    public function keys(): array
    {
        return array_keys($this->elements);
    }

    public function add(string $key, mixed $value): void
    {
        $this->elements[$key] = $value;
    }

    public function remove(string $key): void
    {
        unset($this->elements[$key]);
    }

    public function get(string $key): mixed
    {

        return isset($this->elements[$key]) ? $this->elements[$key] : null;
    }

    public function all(): array
    {
        return array_values($this->elements);
    }

    public function merge(RegistryInterface $registry): void
    {
        foreach ($registry as $key => $value) {
            $this->add($key, $value);
        }
    }
}