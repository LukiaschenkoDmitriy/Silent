<?php declare(strict_types=1);

namespace Silent\Core\ElementSearch;

use Silent\Core\DTO\Element\FindStrategy;
use Silent\Core\Scope\W3C\Element\W3CElementScope;

class ElementSearch {
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
            return new Element($this->scope, $this->scope->find->element($strategy, $value), lazy: $this->lazy);
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
        return array_map(fn(string $elementId) => new Element($this->scope, $elementId, lazy: $this->lazy), $this->scope->find->elements($strategy, $value));
    }

    public function findElementByCSS(string $value): ?Element
    {
        return $this->findElement(FindStrategy::CSS_SELECTOR, $value);
    }

    /**
     * Summary of findElementsByCSS
     * @param string $value
     * @return Element[]
     */
    public function findElementsByCSS(string $value): array
    {
        return $this->findElements(FindStrategy::CSS_SELECTOR, $value);
    }

    public function findElementByXPath(string $value): ?Element
    {
        return $this->findElement(FindStrategy::XPATH, $value);
    }

    /**
     * Summary of findElementsByXPath
     * @param string $value
     * @return Element[]
     */
    public function findElementsByXPath(string $value): array
    {
        return $this->findElements(FindStrategy::XPATH, $value);
    }

    public function findElementByTag(string $value): ?Element
    {
        return $this->findElement(FindStrategy::TAG, $value);
    }

    /**
     * Summary of findElementsByTag
     * @param string $value
     * @return Element[]
     */
    public function findElementsByTag(string $value): array
    {
        return $this->findElements(FindStrategy::TAG, $value);
    }

    public function findElementByText(string $value): ?Element
    {
        return $this->findElement(FindStrategy::TEXT, $value);
    }

    /**
     * Summary of findElementsByText
     * @param string $value
     * @return Element[]
     */
    public function findElementsByText(string $value): array
    {
        return $this->findElements(FindStrategy::TEXT, $value);
    }

    public function findElementByPartialText(string $value): ?Element
    {
        return $this->findElement(FindStrategy::PARTIAL_TEXT, $value);
    }

    /**
     * Summary of findElementsByPartialText
     * @param string $value
     * @return Element[]
     */
    public function findElementsByPartialText(string $value): array
    {
        return $this->findElements(FindStrategy::PARTIAL_TEXT, $value);
    }
}