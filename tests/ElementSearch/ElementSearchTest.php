<?php declare(strict_types=1);

namespace Tests\ElementSearch;

use PHPUnit\Framework\TestCase;
use Silent\Core\DI\Container;
use Silent\Core\DTO\Element\FindStrategy;
use Silent\Core\ElementSearch\ElementSearch;
use Silent\Core\Scope\Scope;
use Silent\Core\Setup\CoreSetup;
use Tests\Fixtures\Setup\SetupFixture\SetupFixture;

class ElementSearchTest extends TestCase {
    private ElementSearch $search;
    private Scope $scope;
    private CoreSetup $setup;
    protected function setUp(): void
    {
        $this->setup = SetupFixture::init(new Container());
        $this->scope = new Scope($this->setup->getWebDriver());
        $this->search = new ElementSearch($this->setup->getWebDriver(), true);
    }

    public function testElementSearch() {
        $this->scope->navigation->to("https://www.google.com/");

        $html = $this->search->findElement(FindStrategy::CSS_SELECTOR, "html");

        $this->assertEquals("html", $html->getName());
        $this->assertEquals("pl", $html->getAttribute("lang"));

        $body = $html->findElement(FindStrategy::CSS_SELECTOR, "body");

        $this->assertEquals("body", $body->getName());

        $this->assertEquals(891, $body->getElementProperty("clientHeight"));
        $this->assertEquals(["interrupted" => false], $body->runElementFunction("scroll", [10, 20]));
        $this->assertEquals("[object HTMLBodyElement]", $body->runJsCodeOnElement(".toLocaleString()"));

        $body->setElementProperty("classList", ["test1 test2"]);
        $this->assertEquals(["test1", "test2"], $body->getElementProperty("classList"));
    }

    protected function tearDown(): void
    {
        $this->setup->getWebDriver()->closeSession();
    }
}