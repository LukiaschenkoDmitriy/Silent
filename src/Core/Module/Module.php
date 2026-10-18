<?php declare(strict_types=1);

namespace Silent\Core\Module;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\WebDriver\WebDriver;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

abstract class Module implements ModuleInterface {
    public function plugins(): array { return []; }
    public function capabilities(Capabilities $capabilities, ChromeOptions $options): void { }
    public function prepare(WebDriver $webdriver, ContainerBuilder $container): void { }
    public static function loadDefaultServices(ContainerBuilder $container): void
    {
        $moduleConfigDir = dirname((new \ReflectionClass(static::class))->getFileName(), 2) . "/config";

        if (file_exists($moduleConfigDir . "/services.php")) {
            (new PhpFileLoader($container, new FileLocator($moduleConfigDir)))->load("services.php");
        }
    }
    public static function container(ContainerBuilder $container): void {}
}