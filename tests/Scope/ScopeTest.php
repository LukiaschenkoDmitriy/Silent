<?php declare(strict_types=1);

namespace Tests\Scope;

use Override;
use PHPUnit\Framework\TestCase;
use Silent\Core\DI\Container;
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

    public function testLocation() {
        $location = $this->scope->location;

        $location->getLocation();
    }

    public function tearDown(): void
    {
        $this->setup->getWebDriver()->closeSession();
    }
}