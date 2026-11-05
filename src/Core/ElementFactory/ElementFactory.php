<?php declare(strict_types=1);

namespace Silent\Core\ElementFactory;

use Silent\Core\DTO\Element\FindStrategy;
use Silent\Core\Scope\W3C\Element\W3CElementScope;

class ElementFactory {
    public function __construct(private W3CElementScope $scope, private bool $lazy = true) {}
    public function disableLazyLoading(): void
    {
        $this->lazy = false;   
    }

    public function enableLazyLoading(): void
    {
        $this->lazy = true;
    }

    public function findElement(FindStrategy $strategy, string $value): ?Element
    {
        try {
            return new Element($this->scope, $this->scope->find->element($strategy, $value), $this->lazy);
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Summary of findElements
     * @param FindStrategy $strategy
     * @param string $value
     * @return Element[]
     */
    public function findElements(FindStrategy $strategy, string $value): array
    {
        return array_map(fn(string $elementId) => new Element($this->scope, $elementId, $this->lazy), $this->scope->find->elements($strategy, $value));
    }
}