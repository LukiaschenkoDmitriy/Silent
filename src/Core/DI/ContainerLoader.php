<?php declare(strict_types=1);

namespace Silent\Core\DI;

use Closure;
use Override;
use Silent\Core\Module\ModuleInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

use function Symfony\Component\DependencyInjection\Loader\Configurator\tagged_iterator;

class ContainerLoader implements ContainerLoaderInterface {
    public static function registerPlugins(ContainerBuilder $builder, string $class): void
    {
        $plugins = $class::plugins();

        foreach ($plugins as $plugin) {
            $builder->register($plugin, $plugin)->addTag("webdriver.plugin")->setPublic(true)->setAutowired(true);
        }
    }

    public static function loadModule(ContainerBuilder $builder, string $moduleClass): void
    {
        $moduleDir = dirname((new \ReflectionClass($moduleClass))->getFileName(), 2);

        static::loadServices($builder, $moduleDir);
        static::load($moduleClass::load(), $builder, $moduleDir);

        static::registerPlugins($builder, $moduleClass);
        $builder->register($moduleClass, $moduleClass)->setAutowired(true)->addTag("webdriver.module")->setPublic(true);
    }

    public static function loadSetup(ContainerBuilder $builder, string $setupClass): void
    {
        $setupDir = dirname((new \ReflectionClass($setupClass))->getFileName(), 2);
        $builder->setParameter("webdriver.project_dir", $setupDir);

        static::loadServices($builder, $setupDir);

        $modules = $setupClass::modules();

        foreach ($modules as $moduleClass => $enabled) {
            $moduleClass = (string) $moduleClass;
            if (!$enabled || !is_subclass_of($moduleClass, ModuleInterface::class)) {
                continue;
            }

            static::loadModule($builder, $moduleClass);
        }

        static::registerPlugins($builder, $setupClass);

        $builder->setAlias(ContainerBuilder::class, "service_container")->setPublic(true);
        $builder->register($setupClass, $setupClass)->addTag("webdriver.setup")->setPublic(true)->setAutowired(true)
            ->addMethodCall("setModules", [tagged_iterator("webdriver.module")])
            ->addMethodCall("setPlugins", [tagged_iterator("webdriver.plugins")]);

        $builder->compile(true);
    }

    public static function loadServices(ContainerBuilder $builder, string $dir): void
    {
        $configDir = $dir . "/config";

        if (file_exists($configDir . "/services.php")) {
            (new PhpFileLoader($builder, new FileLocator($configDir)))->load("services.php");
        }
    }

    /**
     * Summary of load
     * @param Closure(ContainerBuilder, FileLocator): void $closure
     * @param ContainerBuilder $builder
     * @param string $dir
     * @throws \Exception
     * @return never
     */
    public static function load(Closure $closure, ContainerBuilder $builder, string $dir): void
    {
        $closure($builder, new FileLocator($dir . "/config"));
    }
}