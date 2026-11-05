<?php declare(strict_types=1);

namespace Tests\ElementFactory;

use PHPUnit\Framework\TestCase;
use Silent\Core\DI\Container;
use Silent\Core\DTO\Element\FindStrategy;
use Silent\Core\ElementFactory\ElementFactory;
use Silent\Core\Scope\Scope;
use Silent\Core\Setup\CoreSetup;
use Tests\Fixtures\Setup\SetupFixture\SetupFixture;

class ElementFactoryTest extends TestCase {
    private ElementFactory $factory;
    private Scope $scope;
    private CoreSetup $setup;
    protected function setUp(): void
    {
        $this->setup = SetupFixture::init(new Container());
        $this->scope = $this->setup->getWebDriver()->scope();
        $this->factory = new ElementFactory($this->scope->element, true);
    }

    public function testFactory() {
        $this->scope->navigation->to("https://www.google.com/");

        $html = $this->factory->findElement(FindStrategy::CSS_SELECTOR, "html");

        $this->assertEquals("html", $html->getName());
        $this->assertEquals("pl", $html->getAttribute("lang"));

        $body = $html->findElement(FindStrategy::CSS_SELECTOR, "body");

        $this->assertEquals("body", $body->getName());
    }

    protected function tearDown(): void
    {
        $this->setup->getWebDriver()->closeSession();
    }
}