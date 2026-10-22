<?php declare(strict_types=1);

namespace Silent\Core\DI;

use Closure;
use Silent\Core\Module\ModuleInterface;
use Silent\Core\Setup\SetupInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

use function Symfony\Component\DependencyInjection\Loader\Configurator\tagged_iterator;

class ContainerLoader implements ContainerLoaderInterface {
    public static function registerPlugins(ContainerBuilder $builder, string $class): void
    {
        if (!is_a($class, ModuleInterface::class, true) && !is_a($class, SetupInterface::class, true)) {
            throw new \InvalidArgumentException(sprintf("Class %s not implements ModuleInterface or SetupInterface", $class));
        }

        $plugins = $class::plugins();

        foreach ($plugins as $plugin => $params) {
            $notParams = is_int($plugin);

            $plugin = $notParams ? $params : $plugin;

            $def = $builder->register($plugin, $plugin)->addTag("webdriver.plugin")->setPublic(true)->setAutowired(true);

            if (!$notParams) {
                $def->addMethodCall("setParams", [$params]);
            }
        }
    }

    public static function loadModule(ContainerBuilder $builder, string $moduleClass, mixed $params = null): void
    {
        if (!is_a($moduleClass, ModuleInterface::class, true)) {
            throw new \InvalidArgumentException(sprintf("Class %s not implements ModuleInterface", $moduleClass));
        }

        $moduleDir = dirname((new \ReflectionClass($moduleClass))->getFileName(), 2);

        static::loadServices($builder, $moduleDir);
        static::load($moduleClass::load(), $builder, $moduleDir);

        static::registerPlugins($builder, $moduleClass);
        $builder->register($moduleClass, $moduleClass)->setAutowired(true)->addTag("webdriver.module")->setPublic(true)->addMethodCall("setParams", [$params]);
    }

    public static function loadSetup(ContainerBuilder $builder, string $setupClass): void
    {
        if (!is_a($setupClass, SetupInterface::class, true)) {
            throw new \InvalidArgumentException(sprintf("Class %s not implements SetupInterface", $setupClass));
        }

        $setupDir = dirname((new \ReflectionClass($setupClass))->getFileName(), 2);
        $builder->setParameter("webdriver.project_dir", $setupDir);

        static::loadServices($builder, $setupDir);

        $modules = $setupClass::modules($builder);

        foreach ($modules as $moduleClass => $params) {
            $notParams = is_int($moduleClass);

            $moduleClass = $notParams ? $params : $moduleClass;

            $moduleClass = (string) $moduleClass;
            if (!is_subclass_of($moduleClass, ModuleInterface::class)) {
                throw new \InvalidArgumentException(sprintf("Module %s not implements ModuleInterface", $moduleClass));
            }

            static::loadModule($builder, $moduleClass, $notParams ? null : $params);
        }

        static::registerPlugins($builder, $setupClass);

        $builder->setAlias(ContainerInterface::class, "service_container")->setPublic(true);
        $builder->register($setupClass, $setupClass)->addTag("webdriver.setup")->setPublic(true)->setAutowired(true)
            ->addMethodCall("setModules", [tagged_iterator("webdriver.module")])
            ->addMethodCall("setPlugins", [tagged_iterator("webdriver.plugin")]);

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