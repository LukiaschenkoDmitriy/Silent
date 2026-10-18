<?php declare(strict_types=1);

namespace Silent\Core\WebDriverSetup;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\WebDriver\WebDriver;
use Symfony\Component\DependencyInjection\ContainerBuilder;

interface WebDriverSetupInterface {
    public function hub(): ?string;
    public function capabilities(): ?Capabilities;
    public function setupOptions(): WebDriverSetupOptions;
    public function plugins(): array;
    public function getWebDriver(): WebDriver;
    public function run(WebDriver $webdriver, ContainerBuilder $container): void;
    public static function loadModules(ContainerBuilder $container): void;
    public static function container(ContainerBuilder $container): void;
    public static function initSetup(ContainerBuilder $container): void;
    public function setModules(iterable $modules): void;
    public function getModules(): iterable;
    public function setContainer(ContainerBuilder $container): void;
    public function getModule(string $moduleClass): object;
}