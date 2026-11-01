<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\W3C\Element;

use Silent\Core\Command\Scope\W3C\AbstractW3CScope;
use Silent\Core\Command\W3C\Element\Find\FindElementCommand;
use Silent\Core\Command\W3C\Element\Find\FindElementsCommand;
use Silent\Core\Command\W3C\Element\Find\FindShadowElementCommand;
use Silent\Core\Command\W3C\Element\Find\In\FindElementInCommand;
use Silent\Core\Command\W3C\Element\Find\In\FindElementsInCommand;
use Silent\Core\Command\W3C\Element\Find\In\FindShadowElementInCommand;
use Silent\Core\Command\W3C\Element\Find\In\FindShadowElementsInCommand;
use Silent\Core\DTO\Element\FindStrategy;

class W3CFindElementScope extends AbstractW3CScope {
    public function element(FindStrategy $strategy, string $value): string
    {
        return $this->e->execute(new FindElementCommand($strategy, $value, $this->s));
    }

    /**
     * Summary of elements
     * @param FindStrategy $strategy
     * @param string $value
     * @return array<string>
     */
    public function elements(FindStrategy $strategy, string $value): array
    {
        return $this->e->execute(new FindElementsCommand($strategy, $value, $this->s));
    }

    public function shadowElement(string $elementId): string
    {
        return $this->e->execute(new FindShadowElementCommand($elementId, $this->s));
    }

    public function elementIn(string $elementId, FindStrategy $strategy, string $value): string
    {
        return $this->e->execute(new FindElementInCommand($elementId, $strategy, $value, $this->s));
    }

    /**
     * Summary of elementsIn
     * @param string $elementId
     * @param FindStrategy $strategy
     * @param string $value
     * @return array<string>
     */
    public function elementsIn(string $elementId, FindStrategy $strategy, string $value): array
    {
        return $this->e->execute(new FindElementsInCommand($elementId, $strategy, $value, $this->s));
    }

    public function shadowElementIn(string $elementId, FindStrategy $strategy, string $value): string
    {
        return $this->e->execute(new FindShadowElementInCommand($elementId, $strategy, $value, $this->s));
    }

    /**
     * Summary of shadowElementsIn
     * @param string $elementId
     * @param FindStrategy $strategy
     * @param string $value
     * @return array<string>
     */
    public function shadowElementsIn(string $elementId, FindStrategy $strategy, string $value): array
    {
        return $this->e->execute(new FindShadowElementsInCommand($elementId, $strategy, $value, $this->s));
    }
}