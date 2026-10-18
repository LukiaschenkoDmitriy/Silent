<?php declare(strict_types=1);

namespace Silent\Core\Application;

use Symfony\Component\DependencyInjection\ContainerBuilder;

interface ApplicationInterface {
    public function loadModules(): void;
    public function run(): void;
    public static function container(ContainerBuilder $container): void;
}