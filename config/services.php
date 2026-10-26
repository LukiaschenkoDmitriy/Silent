<?php declare(strict_types=1);

use Silent\Core\EventDispatcher\SEventDispatcher;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

use function Symfony\Component\DependencyInjection\Loader\Configurator\tagged_iterator;

return static function (ContainerConfigurator $container): void {
    $params = $container->parameters();

    $params->set("webdriver.project_dir", dirname(__DIR__));

    $services = $container->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure()
        ->private();

    $services->set(EventDispatcherInterface::class, SEventDispatcher::class)->call("registerSubscribers", [tagged_iterator("webdriver.subscriber")])->public();
};