<?php declare(strict_types=1);

namespace Silent\Core\Application;

use Silent\Core\Module\Module;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

abstract class Application implements ApplicationInterface {
    public function __construct(protected ContainerBuilder $container = new ContainerBuilder()) {
        (new PhpFileLoader($container, new FileLocator(dirname(__DIR__, 3) . "/config")))->load("services.php");

        $projectDir = dirname((new \ReflectionClass(static::class))->getFileName(), 2);
        $container->setParameter("webdriver.project_dir", $projectDir);
    }

    public function loadModules(): void {
        $applicationConfigDir = dirname((new \ReflectionClass(static::class))->getFileName(), 2) . "/config";

        if (file_exists($applicationConfigDir . "/modules.php")) {
            $modules = require $applicationConfigDir . "/modules.php";

            foreach ($modules as $moduleClass => $enabled) {
                $moduleClass = (string) $moduleClass;
                if (!$enabled || !is_subclass_of($moduleClass, Module::class)) {
                    continue;
                }

                $moduleClass::loadDefaultServices($this->container);
                $moduleClass::container($this->container);

                $this->container->register($moduleClass, $moduleClass)->setAutowired(true)->addTag("webdriver.module");
            }
        }
    }

    public function __invoke()
    {
        $this->loadModules();
        $this->container->compile(true);
        $this->run();
    }
}