<?php declare(strict_types=1);

namespace Silent\Core\ElementSearch;

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
        private string $type = FindConstants::ELEMENT,
        private bool $lazy = true
    ) {
        if ($lazy) return;

        $this->refreshStates();
    }

    public function getType(): string
    {
        return $this->type;
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
            return new Element($this->scope, $this->scope->find->elementIn($this->elementId, $strategy, $value), FindConstants::ELEMENT, $this->lazy);
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
        return array_map(fn(string $elementId) => new Element($this->scope, $elementId, FindConstants::ELEMENT, $this->lazy), $this->scope->find->elementsIn($this->elementId, $strategy, $value));
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

    public function findShadowElement(FindStrategy $strategy, string $value): ?Element
    {
        try {
            return new Element($this->scope, $this->scope->find->shadowElementIn($this->elementId, $strategy, $value), FindConstants::SHADOW_ROOT, $this->lazy);
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
        return array_map(fn(string $elementId) => new Element($this->scope, $elementId, FindConstants::SHADOW_ROOT, $this->lazy), $this->scope->find->shadowElementsIn($this->elementId, $strategy, $value));
    }

     public function findShadowElementByCSS(string $value): ?Element
    {
        return $this->findShadowElement(FindStrategy::CSS_SELECTOR, $value);
    }

    /**
     * Summary of findShadowElementsByCSS
     * @param string $value
     * @return Element[]
     */
    public function findShadowElementsByCSS(string $value): array
    {
        return $this->findShadowElements(FindStrategy::CSS_SELECTOR, $value);
    }

    public function findShadowElementByXPath(string $value): ?Element
    {
        return $this->findShadowElement(FindStrategy::XPATH, $value);
    }

    /**
     * Summary of findShadowElementsByXPath
     * @param string $value
     * @return Element[]
     */
    public function findShadowElementsByXPath(string $value): array
    {
        return $this->findShadowElements(FindStrategy::XPATH, $value);
    }

    public function findShadowElementByTag(string $value): ?Element
    {
        return $this->findShadowElement(FindStrategy::TAG, $value);
    }

    /**
     * Summary of findShadowElementsByTag
     * @param string $value
     * @return Element[]
     */
    public function findShadowElementsByTag(string $value): array
    {
        return $this->findShadowElements(FindStrategy::TAG, $value);
    }

    public function findShadowElementByText(string $value): ?Element
    {
        return $this->findShadowElement(FindStrategy::TEXT, $value);
    }

    /**
     * Summary of findShadowElementsByText
     * @param string $value
     * @return Element[]
     */
    public function findShadowElementsByText(string $value): array
    {
        return $this->findShadowElements(FindStrategy::TEXT, $value);
    }

    public function findShadowElementByPartialText(string $value): ?Element
    {
        return $this->findShadowElement(FindStrategy::PARTIAL_TEXT, $value);
    }

    /**
     * Summary of findShadowElementsByPartialText
     * @param string $value
     * @return Element[]
     */
    public function findShadowElementsByPartialText(string $value): array
    {
        return $this->findShadowElements(FindStrategy::PARTIAL_TEXT, $value);
    }

    public function getElementProperty(string $property): mixed
    {
        return $this->runJsCodeOnElement(".{{ property }}", ["property" => $property]);
    }

    public function setElementProperty(string $property, mixed $value): mixed
    {
        return $this->runJsCodeOnElement(".{{ property }} = {{ value|json }}", ["property" => $property, "value" => $value]);
    }

    public function runElementFunction(string $function, array $arguments): mixed
    {
        return $this->runJsCodeOnElement(".{{ function }}(...{{ arguments|json }})", ["function" => $function, "arguments" => $arguments]);
    }

    public function runJsCodeOnElement(string $code, array $arguments = []): mixed
    {
        return $this->scope->getExecutor()->execute(new ExecuteScriptCommand(JsFileBuilder::buildFromString(
            sprintf("return arguments[0]%s;", $code),$arguments
        ), [[$this->type => $this->elementId]], $this->scope->getSessionId()));
    }
}