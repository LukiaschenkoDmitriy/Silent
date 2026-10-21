<?php declare(strict_types=1);

namespace Silent\Core\Module;

use Closure;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\WebDriver\WebDriver;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Module implements ModuleInterface {
    public const CLOSE = 0;
    public const CONTINUE = 1;
    private mixed $params = null;
    public function setParams(mixed $params): void
    {
        $this->params = $params;
    }
    public function getParams(): mixed
    {
        return $this->params;
    }
    public function run(WebDriver $webdriver, ContainerInterface $container): int { return static::CONTINUE; }
    public static function capabilities(Capabilities $capabilities, ChromeOptions $options): void { }
    public static function load(): Closure
    {
        return function (ContainerBuilder $builder, FileLocator $locator) {
            return;
        };
    }
    public static function plugins(): array
    {
        return [];
    }
}