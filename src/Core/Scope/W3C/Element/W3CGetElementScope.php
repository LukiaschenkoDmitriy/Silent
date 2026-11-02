<?php declare(strict_types=1);

namespace Silent\Core\Scope\W3C\Element;

use Silent\Core\Scope\AbstractScope;
use Silent\Core\Command\W3C\Element\Get\GetActiveElementCommand;
use Silent\Core\Command\W3C\Element\Get\GetElementAttributeCommand;
use Silent\Core\Command\W3C\Element\Get\GetElementComputedLabelCommand;
use Silent\Core\Command\W3C\Element\Get\GetElementComputedRoleCommand;
use Silent\Core\Command\W3C\Element\Get\GetElementCSSValueCommand;
use Silent\Core\Command\W3C\Element\Get\GetElementNameCommand;
use Silent\Core\Command\W3C\Element\Get\GetElementRectCommand;
use Silent\Core\Command\W3C\Element\Get\GetElementTextCommand;
use Silent\Core\DTO\Window\WindowRect;

class W3CGetElementScope extends AbstractScope {
    public function activeElement(): string
    {
        return $this->e->execute(new GetActiveElementCommand($this->s));
    }

    public function elementAttribute(string $elementId, string $attribute): string
    {
        return $this->e->execute(new GetElementAttributeCommand($elementId, $attribute, $this->s));
    }

    public function elementComputedLabel(string $elementId): string
    {
        return $this->e->execute(new GetElementComputedLabelCommand($elementId, $this->s));
    }

    public function elementComputedRole(string $elementId): string
    {
        return $this->e->execute(new GetElementComputedRoleCommand($elementId, $this->s));
    }

    public function elementCSSValue(string $elementId, string $propertyName): string
    {
        return $this->e->execute(new GetElementCSSValueCommand($elementId, $propertyName, $this->s));
    }

    public function elementName(string $elementId): string
    {
        return $this->e->execute(new GetElementNameCommand($elementId, $this->s));
    }

    public function elementRect(string $elementId): WindowRect
    {
        return $this->e->execute(new GetElementRectCommand($elementId, $this->s));
    }

    public function elementText(string $elementId): string
    {
        return $this->e->execute(new GetElementTextCommand($elementId, $this->s));
    }
}