<?php declare(strict_types=1);

namespace Silent\Core\Setup;

use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\WebDriver\WebDriverInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

interface SetupInterface {
    public function hub(): ?string;
    public function capabilities(): ?Capabilities;
    public function getWebDriver(): WebDriverInterface;
    public function run(WebDriverInterface $webdriver, ContainerInterface $container): void;
    public function getModule(string $moduleClass): ?object;
    public function setWebDriver(WebDriverInterface $webdriver): WebDriverInterface;
    public function listeners(EventDispatcherInterface $dispatcher): void;
    public static function init(ContainerBuilder $builder): SetupInterface;
    public static function modules(ContainerInterface $container): array;
}