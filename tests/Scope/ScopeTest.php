<?php declare(strict_types=1);

namespace Tests\Scope;

use PHPUnit\Framework\TestCase;
use Silent\Core\Command\W3C\Element\Exception\NotFoundElementException;
use Silent\Core\Command\W3C\Location\Exception\LocationNotSetException as ExceptionLocationNotSetException;
use Silent\Core\Command\W3C\Location\SetLocationCommand;
use Silent\Core\DI\Container;
use Silent\Core\DTO\Element\FindStrategy;
use Silent\Core\DTO\Location\Location;
use Silent\Core\DTO\Window\WindowRect;
use Silent\Core\DTO\Window\WindowType;
use Silent\Core\Scope\Scope;
use Silent\Core\Setup\CoreSetup;
use Tests\Fixtures\Setup\SetupFixture\SetupFixture;

class ScopeTest extends TestCase {
    private CoreSetup $setup;
    private Scope $scope;
    protected function setUp(): void
    {
        $this->setup = SetupFixture::init(new Container());
        $this->scope = $this->setup->getWebDriver()->actions();
    }

    public function testScopeNavigator() {
        $navigation = $this->scope->navigation;

        $navigation->to("https://www.google.com/");

        $this->assertEquals("https://www.google.com/", $navigation->currentUrl());

        $navigation->to("https://www.youtube.com/");

        $navigation->back();
        $this->assertEquals("https://www.google.com/", $navigation->currentUrl());
        $navigation->forward();
        $this->assertEquals("https://www.youtube.com/", $navigation->currentUrl());

        $navigation->refresh();

        $this->assertEquals("https://www.youtube.com/", $navigation->currentUrl());
    }

    public function testScopeWindow() {
        $window = $this->scope->window;

        $this->assertEquals($window->fullscreen(), $window->getRect());
        $this->assertEquals($window->maximize(), $window->getRect());

        $handlesCount = count($window->getHandles());

        $window->create(WindowType::TAB);

        $this->assertEquals($handlesCount + 1, count($window->getHandles()));

        $window->create(WindowType::WINDOW);

        $this->assertEquals($handlesCount + 2, count($window->getHandles()));

        $this->assertEquals($window->setRect(new WindowRect(50, 50, 1000, 1000)), $window->getRect());

        $window->closeCurrent();

        $this->assertEquals(2, count($window->getHandles()));

        $handles = $window->getHandles();

        $window->switchTo($handles[1]);

        $this->assertEquals($handles[1], $window->getCurrent());

        $window->switchTo($handles[0]);

        $this->assertEquals($handles[0], $window->getCurrent());
    }

    public function testScreenshot() {
        $screenshot = $this->scope->screenshot;

        $screenshot->screenshot(__DIR__ . "/file.png");

        $this->assertFileExists(__DIR__ . "/file.png");

        unlink(__DIR__ . "/file.png");
    }

    public function testLocationException() {
        $location = $this->scope->location;

        $this->expectException(ExceptionLocationNotSetException::class);
        $this->expectExceptionMessageIs(sprintf("Location is not set. Please set the location using the %s before using this command.", SetLocationCommand::class));

        $location->getLocation();
    }

    public function testLocationInvalidArgument() {
        $location = $this->scope->location;

        $this->expectException(\InvalidArgumentException::class);

        $location->setLocation(new Location(255.5, 255.5));
    }

    public function testLocation() {
        $location = $this->scope->location;

        $location->setLocation(new Location(55.5, 155.5));

        $this->assertEquals(new Location(55.5, 155.5), $location->getLocation());
    }

    public function testDocumentScriptException() {
        $document = $this->scope->document;

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageIs("Template not found: /home/dmytrii/Desktop/Silent/tests/Scope");

        $document->syncScript(__DIR__);
    }

    public function testDocument() {
        $document = $this->scope->document;

        $syncResult = $document->drySyncScript("return 5+5;");

        $this->assertEquals($syncResult, 10);

        $asyncResult = $document->dryAsyncScript("const [done] = arguments; done(5+12)");

        $this->assertEquals($asyncResult, 17);

        $result = $document->syncScript(__DIR__ . "/scripts/sync.js", ["var2" => 10]);

        $this->assertEquals($result, 30);

        $result = $document->asyncScript(__DIR__ . "/scripts/async.js", ["var1" => 5]);

        $this->assertEquals($result, 55);

        $this->scope->navigation->to("https://www.youtube.com/");

        $this->assertEquals("YouTube", $document->getTitle());

        $this->scope->navigation->to("https://www.google.com/");

        file_put_contents(__DIR__ . "/test.txt", $document->getPageSource());

        $this->assertFileExists(__DIR__ . "/test.txt");

        unlink(__DIR__ . "/test.txt");
    }

    public function testElementInvalidSelector() {
        $this->scope->navigation->to("https://www.google.com/");

        $element = $this->scope->element;

        $this->expectException(NotFoundElementException::class);
        $this->expectExceptionMessageIs("Failed to find an element with the given selector: bod2222y");

        $element->find->element(FindStrategy::CSS_SELECTOR, "bod2222y");
    }

    public function testGetElement() {
        $this->scope->navigation->to("https://www.google.com/");

        $element = $this->scope->element;
        $htmlId = $element->find->element(FindStrategy::CSS_SELECTOR, "html");

        $this->assertEquals("html", $element->get->elementName($htmlId));
        $this->assertEquals("pl", $element->get->elementAttribute($htmlId, "lang"));
        $this->assertEquals(new WindowRect(0, 0, 937, 891), $element->get->elementRect($htmlId));
        $this->assertStringContainsString("Google Store", $element->get->elementText($htmlId));
        $this->assertEquals("block", $element->get->elementCSSValue($htmlId, "display"));
    }

    public function tearDown(): void
    {
        $this->setup->getWebDriver()->closeSession();
    }
}