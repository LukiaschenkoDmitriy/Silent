<?php declare(strict_types=1);

namespace Silent\Core\Module;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\WebDriver\WebDriver;
use Symfony\Component\DependencyInjection\ContainerBuilder;

interface ModuleInterface {
    public function plugins(): array;
    public function capabilities(Capabilities $capabilities, ChromeOptions $options): void;
    public function prepare(WebDriver $webdriver, ContainerBuilder $container): int;
    public function setParams(mixed $params): void;
    public function getParams(): mixed;
    public static function loadDefaultServices(ContainerBuilder $container): void;
    public static function container(ContainerBuilder $container): void;
}