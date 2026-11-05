<?php declare(strict_types=1);

namespace Tests\DI;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Silent\Core\DI\Container;
use Silent\Core\DI\ContainerLoader;
use Silent\Core\Scope\Scope;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Tests\Fixtures\Module\ModuleFixture\ModuleFixture;
use Tests\Fixtures\Plugin\PluginFixture\PluginFixture;
use Tests\Fixtures\Setup\SetupFixture\InvalidSetupFixture;
use Tests\Fixtures\Setup\SetupFixture\SetupFixture;

final class ContainerLoaderTest extends TestCase {
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
    }

    public function testInvalidLoadModule() {
        $container = new Container();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageIs(sprintf("Class %s not implements ModuleInterface", Scope::class));

        ContainerLoader::loadModule($container, Scope::class);
    }

    public function testSetupLoad() {
        $container = new Container();

        ContainerLoader::loadSetup($container, SetupFixture::class);

        $this->assertEquals(true, $container->getParameter("tests.load"));
        $this->assertEquals(true, $container->getParameter("tests.module_load_services"));
        $this->assertInstanceOf(ModuleFixture::class, $container->get(ModuleFixture::class));
    }

    public function testIvalidLoadSetup() {
        $container = new Container();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageIs(sprintf("Class %s not implements SetupInterface", Scope::class));

        ContainerLoader::loadSetup($container, Scope::class);
    }

    public function testLoadSetupWithInvalidModule() {
        $container = new Container();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageIs(sprintf("Module %s not implements ModuleInterface", Scope::class));

        ContainerLoader::loadSetup($container, InvalidSetupFixture::class);
    }
}