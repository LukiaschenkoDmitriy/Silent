<?php declare(strict_types=1);

namespace Tests\DI;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Silent\Core\DI\Container;
use Silent\Core\DI\ContainerLoader;
use Silent\Core\Module\Module;
use Silent\Core\Plugin\Plugin;
use Silent\Core\Setup\CoreSetup;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Tests\Fixtures\Module\ModuleFixture\ModuleFixture;
use Tests\Fixtures\Plugin\PluginFixture\PluginFixture;
use Tests\Fixtures\Setup\SetupFixture\InvalidSetupFixture;
use Tests\Fixtures\Setup\SetupFixture\SetupFixture;

final class ContainerLoaderTest extends TestCase {
    public function testRegisterPluginsWithInvalidClass() {
        $container = new Container();

        $fixture = new class() extends Plugin { };

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageIs(sprintf("Class %s not implements ModuleInterface or SetupInterface", $fixture::class));

        ContainerLoader::registerPlugins($container, $fixture::class);
    }

    public function testRegisterPluginsWithModuleClass() {
        $container = new Container();

        $fixture = new class () extends Module {};

        $this->expectNotToPerformAssertions();

        ContainerLoader::registerPlugins($container, $fixture::class);
    }

    public function testRegisterPluginsWithSetupClass() {
        $container = new Container();

        $fixture = new class ($container) extends CoreSetup {};

        $this->expectNotToPerformAssertions();

        ContainerLoader::registerPlugins($container, $fixture::class);
    }

    public function testRegisterPluginWithModuleClassAndPlugins() {
        $container = new Container();

        $fixture = new class() extends Module {
            public static function plugins(): array
            {
                return [PluginFixture::class];
            }
        };

        ContainerLoader::registerPlugins($container, $fixture::class);

        $container->compile(true);

        $this->assertInstanceOf(PluginFixture::class, $container->get(PluginFixture::class));

        $plugin = $container->get(PluginFixture::class);

        $this->assertNull($plugin->getParams());

        $container = new Container();

        $fixtureWithParams = new class() extends Module {
            public static function plugins(): array
            {
                return [PluginFixture::class => ["key" => "value"]];
            }
        };

        ContainerLoader::registerPlugins($container, $fixtureWithParams::class);

        $this->assertInstanceof(PluginFixture::class, $container->get(PluginFixture::class));

        $plugin = $container->get(PluginFixture::class);

        $this->assertIsArray($plugin->getParams());
        $this->assertArrayHasKey("key", $plugin->getParams());
    }

    public function testRegisterPuginWithSetupClassAndPlugins() {
        $container = new Container();

        $fixture = new class($container) extends CoreSetup { 
            public static function plugins(): array
            {
                return [PluginFixture::class];
            }
        };

        ContainerLoader::registerPlugins($container, $fixture::class);

        $container->compile(true);

        $plugin = $container->get(PluginFixture::class);

        $this->assertInstanceOf(PluginFixture::class, $plugin);
        $this->assertNull($plugin->getParams());

        $container = new Container();

        $fixtureWithParams = new class ($container) extends CoreSetup {
            public static function plugins(): array
            {
                return [PluginFixture::class => "testmessage"];
            }
        };

        ContainerLoader::registerPlugins($container, $fixtureWithParams::class);

        $container->compile(true);

        $plugin = $container->get(PluginFixture::class);

        $this->assertInstanceOf(PluginFixture::class, $plugin);
        $this->assertIsString($plugin->getParams());
        $this->assertEquals("testmessage", $plugin->getParams());
    }

    public function testLoadServices() {
        $container = new Container();

        $dir = dirname((new \ReflectionClass(ModuleFixture::class))->getFileName(), 2);

        ContainerLoader::loadServices($container, $dir);

        $container->compile(true);

        $this->assertEquals(true, $container->getParameter("tests.module_load_services"));
    }

    public function testLoad() {
        $container = new Container();

        $dir = dirname((new \ReflectionClass(ModuleFixture::class))->getFileName(), 2);

        ContainerLoader::load(function (ContainerBuilder $container, FileLocator $locator) {
            (new PhpFileLoader($container, $locator))->load("load.php");
        }, $container, $dir);

        $container->compile(true);

        $this->assertEquals(true, $container->getParameter("tests.load"));
    }

    public function testLoadModule() {
        $container = new Container();

        ContainerLoader::loadModule($container, ModuleFixture::class);

        $container->compile(true);

        $this->assertEquals(true, $container->getParameter("tests.load"));
        $this->assertEquals(true, $container->getParameter("tests.module_load_services"));
        $this->assertInstanceOf(PluginFixture::class, $container->get(PluginFixture::class));
    }

    public function testInvalidLoadModule() {
        $container = new Container();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageIs(sprintf("Class %s not implements ModuleInterface", PluginFixture::class));

        ContainerLoader::loadModule($container, PluginFixture::class);
    }

    public function testSetupLoad() {
        $container = new Container();

        ContainerLoader::loadSetup($container, SetupFixture::class);

        $this->assertEquals(true, $container->getParameter("tests.load"));
        $this->assertEquals(true, $container->getParameter("tests.module_load_services"));
        $this->assertInstanceOf(PluginFixture::class, $container->get(PluginFixture::class));
        $this->assertInstanceOf(ModuleFixture::class, $container->get(ModuleFixture::class));
    }

    public function testIvalidLoadSetup() {
        $container = new Container();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageIs(sprintf("Class %s not implements SetupInterface", PluginFixture::class));

        ContainerLoader::loadSetup($container, PluginFixture::class);
    }

    public function testLoadSetupWithInvalidModule() {
        $container = new Container();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageIs(sprintf("Module %s not implements ModuleInterface", PluginFixture::class));

        ContainerLoader::loadSetup($container, InvalidSetupFixture::class);
    }
}