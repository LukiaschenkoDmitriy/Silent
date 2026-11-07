<?php declare(strict_types=1);

namespace Silent\Core\Module;

use Closure;
use Override;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\WebDriver\WebDriverInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class Module implements ModuleInterface {
    private mixed $params = null;
    public function setParams(mixed $params): void
    {
        $this->params = $params;
    }
    public function getParams(): mixed
    {
        return $this->params;
    }
    public function listeners(EventDispatcherInterface $dispatcher): void {}
    public function run(WebDriverInterface $webdriver, ContainerInterface $container): void {  }
    public static function capabilities(Capabilities $capabilities, ChromeOptions $options): void { }
    public static function load(): Closure
    {
        return function (ContainerBuilder $builder, FileLocator $locator) {
            return;
        };
    }
}