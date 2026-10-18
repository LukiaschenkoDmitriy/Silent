<?php declare(strict_types=1);

namespace Silent\Core\Module;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\WebDriver\WebDriver;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

abstract class Module implements ModuleInterface {
    public const CLOSE = 0;
    public const CONTINUE = 1;
    private mixed $params = null;
    public function plugins(): array { return []; }
    public function capabilities(Capabilities $capabilities, ChromeOptions $options): void { }
    public function prepare(WebDriver $webdriver, ContainerBuilder $container): int { return static::CONTINUE; }
    public function setParams(mixed $params): void
    {
        $this->params = $params;
    }
    public function getParams(): mixed
    {
        return $this->params;
    }
    public static function loadDefaultServices(ContainerBuilder $container): void
    {
        $moduleConfigDir = dirname((new \ReflectionClass(static::class))->getFileName(), 2) . "/config";

        if (file_exists($moduleConfigDir . "/services.php")) {
            (new PhpFileLoader($container, new FileLocator($moduleConfigDir)))->load("services.php");
        }
    }
    public static function container(ContainerBuilder $container): void {}
}