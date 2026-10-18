<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $params = $container->parameters();

    $params->set("webdriver.project_dir", dirname(__DIR__));

    $services = $container->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure()
        ->private();
};