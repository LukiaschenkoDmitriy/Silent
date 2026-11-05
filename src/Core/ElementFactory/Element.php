<?php declare(strict_types=1);

namespace Silent\Core\ElementFactory;

use Silent\Core\Builder\JsFileBuilder;
use Silent\Core\Command\W3C\Document\ExecuteScriptCommand;
use Silent\Core\DTO\Element\FindConstants;
use Silent\Core\DTO\Element\FindStrategy;
use Silent\Core\DTO\Window\WindowRect;
use Silent\Core\Scope\W3C\Element\W3CElementScope;

class Element {
    private bool $elementEnabled;
    private bool $elementSelected;
    private string $computedRole;
    private string $computedLabel;
    private WindowRect $rect;
    private string $name;
    private string $text;
    public function __construct(
        private W3CElementScope $scope,
        private string $elementId, 
        private bool $lazy = true
    ) {
        if ($lazy) return;

        $this->refreshStates();
    }

    public function click():void {
        $this->scope->click($this->elementId);
    }

    public function clearValue():void {
        $this->scope->clearValue($this->elementId);
    }

    public function isElementEnabled(): bool {
        if (!isset($this->elementEnabled)) {
            $this->elementEnabled = $this->scope->isElementEnabled($this->elementId);
        }

        return $this->elementEnabled;
    }

    public function isElementSelected(): bool
    {
        if (!isset($this->elementSelected)) {
            $this->elementSelected = $this->scope->isElementSelected($this->elementId);
        }

        return $this->elementSelected;
    }

    public function changeValue(string $text): void
    {
        $this->scope->changeValue($this->elementId, $text);
    }

    public function getComputedRole(): string
    {
        if (!isset($this->computedRole)) {
            $this->computedRole = $this->scope->get->elementComputedRole($this->elementId);
        }

        return $this->computedRole;
    }

    public function getComputedLabel(): string
    {
        if (!isset($this->computedLabel)) {
            $this->computedLabel = $this->scope->get->elementComputedLabel($this->elementId);
        }

        return $this->computedLabel;
    }

    public function refreshStates(): void
    {
        $this->elementSelected = $this->scope->isElementSelected($this->elementId);
        $this->elementEnabled = $this->scope->isElementEnabled($this->elementId);
        $this->computedRole = $this->scope->get->elementComputedRole($this->elementId);
        $this->computedLabel = $this->scope->get->elementComputedLabel($this->elementId);
        $this->rect = $this->scope->get->elementRect($this->elementId);
        $this->name = $this->scope->get->elementName($this->elementId);
        $this->text = $this->scope->get->elementText($this->elementId);
    }

    public function getRect(): WindowRect
    {
        if (!isset($this->rect)) {
            $this->rect = $this->scope->get->elementRect($this->elementId);
        }

        return $this->rect;
    }

    public function getAttribute(string $attribute): string
    {
        return $this->scope->get->elementAttribute($this->elementId, $attribute);
    }

    public function getCSSValue(string $property): string
    {
        return $this->scope->get->elementCSSValue($this->elementId, $property);
    }

    public function getName(): string
    {
        if (!isset($this->name)) {
            $this->name = $this->scope->get->elementName($this->elementId);
        }

        return $this->name;
    }

    public function getText(): string
    {
        if (!isset($this->text)) {
            $this->text = $this->scope->get->elementText($this->elementId);
        }

        return $this->text;
    }

    public function findElement(FindStrategy $strategy, string $value): ?Element
    {
        try {
            return new Element($this->scope, $this->scope->find->elementIn($this->elementId, $strategy, $value), $this->lazy);
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
        return array_map(fn(string $elementId) => new Element($this->scope, $elementId, $this->lazy), $this->scope->find->elementsIn($this->elementId, $strategy, $value));
    }

    public function findShadowElement(FindStrategy $strategy, string $value): ?Element
    {
        try {
            return new Element($this->scope, $this->scope->find->shadowElementIn($this->elementId, $strategy, $value));
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Summary of findShadowElements
     * @param FindStrategy $strategy
     * @param string $value
     * @return Element[]
     */
    public function findShadowElements(FindStrategy $strategy, string $value): array
    {
        return array_map(fn(string $elementId) => new Element($this->scope, $elementId, $this->lazy), $this->scope->find->shadowElementsIn($this->elementId, $strategy, $value));
    }

    public function getElementProperty(string $property, string $type = FindConstants::ELEMENT): mixed
    {
        return $this->scope->getExecutor()->execute(new ExecuteScriptCommand(JsFileBuilder::buildFromString(
            "return arguments[0].{{ property }};", 
            ["property" => $property]
        ), [[$type => $this->elementId]], $this->scope->getSessionId()));
    }

    public function runElementFunction(string $function, array $arguments, string $type = FindConstants::ELEMENT): mixed
    {
        return $this->scope->getExecutor()->execute(new ExecuteScriptCommand(JsFileBuilder::buildFromString(
            "return arguments[0].{{function}}(...{{arguments|json}});",
            ["function" => $function, "arguments" => $arguments]
        ), [[$type => $this->elementId]], $this->scope->getSessionId()));
    }

    public function runJsCodeOnElement(string $code, string $type = FindConstants::ELEMENT): mixed
    {
        return $this->scope->getExecutor()->execute(new ExecuteScriptCommand(JsFileBuilder::buildFromString(
            "return arguments[0]{{code}};",
            ["code" => $code]
        ), [[$type => $this->elementId]], $this->scope->getSessionId()));
    }
}