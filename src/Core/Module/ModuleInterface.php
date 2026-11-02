<?php declare(strict_types=1);

namespace Silent\Core\Module;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\WebDriver\WebDriverInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

interface ModuleInterface {
    public static function capabilities(Capabilities $capabilities, ChromeOptions $options): void;
    /**
     * Summary of load
     * @return \Closure(ContainerBuilder, FileLocator): void;
     */
    public static function load(): \Closure;
    public function run(WebDriverInterface $webdriver, ContainerInterface $container): int;
    public function listeners(EventDispatcherInterface $dispatcher): void;
    public function setParams(mixed $params): void;
    public function getParams(): mixed;
}