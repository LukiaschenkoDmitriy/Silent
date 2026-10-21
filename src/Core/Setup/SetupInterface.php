<?php declare(strict_types=1);

namespace Silent\Core\Setup;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\Module\ModuleRegistry;
use Silent\Core\Plugin\PluginRegistry;
use Silent\Core\WebDriver\WebDriverInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

interface SetupInterface {
    public function hub(): ?string;
    public function capabilities(): ?Capabilities;
    public function getWebDriver(): WebDriverInterface;
    public function run(WebDriverInterface $webdriver, ContainerInterface $container): void;
    public static function init(ContainerBuilder $builder): WebDriverInterface;
    public static function passModuleParams(ContainerInterface $container): array;
    public function setPlugins(iterable $plugins): void;
    public function moduleRegistry(): ModuleRegistry;
    public function pluginRegistry(): PluginRegistry;
    public static function plugins(): array;
    public static function modules(): array;
}