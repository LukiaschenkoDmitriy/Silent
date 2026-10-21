<?php declare(strict_types=1);

namespace Silent\Core\Module;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\WebDriver\WebDriver;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

interface ModuleInterface {
    public static function plugins(): array;
    public static function capabilities(Capabilities $capabilities, ChromeOptions $options): void;
    /**
     * Summary of load
     * @return \Closure(ContainerBuilder, FileLocator): void;
     */
    public static function load(): \Closure;
    public function run(WebDriver $webdriver, ContainerInterface $container): int;
    public function setParams(mixed $params): void;
    public function getParams(): mixed;
}