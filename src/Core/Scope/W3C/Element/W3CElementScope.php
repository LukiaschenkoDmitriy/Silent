<?php declare(strict_types=1);

namespace Silent\Core\Scope\W3C\Element;

use Silent\Core\Scope\AbstractScope;
use Silent\Core\Command\W3C\Element\Action\ElementChangeValueCommand;
use Silent\Core\Command\W3C\Element\Action\ElementClearCommand;
use Silent\Core\Command\W3C\Element\Action\ElementClickCommand;
use Silent\Core\Command\W3C\Element\IsElementEnabledCommand;
use Silent\Core\Command\W3C\Element\IsElementSelectedCommand;
use Silent\Core\WebDriver\WebDriverInterface;

class W3CElementScope extends AbstractScope {
    public W3CGetElementScope $get;
    public W3CFindElementScope $find;
    public function __construct(WebDriverInterface $webdriver)
    {
        parent::__construct($webdriver);

        $this->get = new W3CGetElementScope($webdriver);
        $this->find = new W3CFindElementScope($webdriver);
    }
    public function changeValue(string $elementId, string $text): void
    {
        $this->e->execute(new ElementChangeValueCommand($elementId, $text, $this->s));
    }

    public function clearValue(string $elementId): void
    {
        $this->e->execute(new ElementClearCommand($elementId, $this->s));
    }

    public function click(string $elementId): void
    {
        $this->e->execute(new ElementClickCommand($elementId, $this->s));
    }
    public function isElementEnabled(string $elementId): bool
    {
        return $this->e->execute(new IsElementEnabledCommand($elementId, $this->s));
    }

    public function isElementSelected(string $elementId): bool
    {
        return $this->e->execute(new IsElementSelectedCommand($elementId, $this->s));
    }
}