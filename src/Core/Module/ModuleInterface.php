<?php declare(strict_types=1);

namespace Silent\Core\Module;

use Silent\Core\WebDriver\WebDriver;
use Symfony\Component\DependencyInjection\ContainerBuilder;

interface ModuleInterface {
    public function plugins(): array;
    public function prepare(WebDriver $webdriver, ContainerBuilder $container): void;
    public static function loadDefaultServices(ContainerBuilder $container): void;
    public static function container(ContainerBuilder $container): void;
}