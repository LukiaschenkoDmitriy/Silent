<?php declare(strict_types=1);

namespace Silent\Core\DI;

use Closure;
use Symfony\Component\DependencyInjection\ContainerBuilder;

interface ContainerLoaderInterface {
    public static function loadServices(ContainerBuilder $builder, string $dir): void;
    public static function load(Closure $closure, ContainerBuilder $builder, string $dir): void;
    public static function loadModule(ContainerBuilder $builder, string $moduleClass): void;
    public static function loadSetup(ContainerBuilder $builder, string $setupClass): void;
    public static function registerPlugins(ContainerBuilder $builder, string $class): void;
}