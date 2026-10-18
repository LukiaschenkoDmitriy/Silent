<?php declare(strict_types=1);

namespace Silent\Core\WebDriverSetup;

use Override;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\CapabilityMatch;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\DTO\Capabilities\Enum\BrowserName;
use Silent\Core\Module\Module;
use Silent\Core\Module\ModuleInterface;
use Silent\Core\WebDriver\WebDriver;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

use function Symfony\Component\DependencyInjection\Loader\Configurator\tagged_iterator;

abstract class WebDriverSetup implements WebDriverSetupInterface {
    private iterable $modules;
    private ContainerBuilder $container;
    public function hub(): ?string
    {
        return null;
    }

    public function setupOptions(): WebDriverSetupOptions
    {
        return new WebDriverSetupOptions();
    }

    public function setContainer(ContainerBuilder $container): void
    {
        $this->container = $container;
    }

    public function getModule(string $moduleClass): object
    {
        return $this->container->get($moduleClass);
    }

    public function getWebDriver(): WebDriver
    {
        if ($this->hub()) WebDriver::setUrl($this->hub());

        $options = $this->setupOptions();

        if ($options->getFirstIfExists) {
            $session = WebDriver::getFirstSession();
            if ($session) return $session;
        }

        $capabilities = $this->capabilities();

        /** @var ModuleInterface $module */
        foreach ($this->modules as $module) {
            $module->capabilities($capabilities, $capabilities->alwaysMatch->chromeOptions);
        }

        $webdriver = $capabilities ? WebDriver::createSession($capabilities) : WebDriver::createSessionWithMinimalCapabilities();

        foreach ($this->plugins() as $plugin) {
            $webdriver->addPlugin($plugin);
        }

        foreach ($this->modules as $module) {
            foreach ($module->plugins() as $plugin){
                $webdriver->addPlugin($plugin);
            }
        }

        $webdriver->initWebDriver();

        return $webdriver;
    }

    public function plugins(): array
    {
        return [];
    }

    public function capabilities(): Capabilities
    {
        return new Capabilities(new CapabilityMatch(BrowserName::CHROME, new ChromeOptions()));
    }

    public function __invoke()
    {
        $webdriver = $this->getWebDriver();
        
        /** @var ModuleInterface $module */
        foreach ($this->modules as $module) {
            if (!$module->prepare($webdriver, $this->container)) {
                $webdriver->closeSession();
                return;
            }
        }

        $this->run($webdriver, $this->container);
    }

    public function setModules(iterable $modules): void
    {
        $this->modules = $modules;
    }

    public function getModules(): iterable
    {
        return $this->modules;
    }

    public static function container(ContainerBuilder $container): void { 
        $projectDir = dirname((new \ReflectionClass(static::class))->getFileName(), 2);
        $container->setParameter("webdriver.project_dir", $projectDir);

        if (file_exists($projectDir . "/config/services.php")) {
            (new PhpFileLoader($container, new FileLocator($projectDir . "/config")))->load("services.php");
        }

        $container->register(static::class, static::class)->addTag("webdriver.setup")->addMethodCall("setModules", [tagged_iterator("webdriver.module")])->setPublic(true)->setAutowired(true);
    }

    public static function loadModules(ContainerBuilder $container): void {
        $applicationConfigDir = dirname((new \ReflectionClass(static::class))->getFileName(), 2) . "/config";

        if (file_exists($applicationConfigDir . "/modules.php")) {
            $modules = require $applicationConfigDir . "/modules.php";

            foreach ($modules as $moduleClass => $enabled) {
                $moduleClass = (string) $moduleClass;
                if (!$enabled || !is_subclass_of($moduleClass, Module::class)) {
                    continue;
                }

                $moduleClass::loadDefaultServices($container);
                $moduleClass::container($container);

                $moduleDef = $container->register($moduleClass, $moduleClass)->setAutowired(true)->addTag("webdriver.module")->setPublic(true);
                
                if (in_array($moduleClass, array_keys(static::passModuleParams()))) {
                    $moduleDef->addMethodCall("setParams", [static::passModuleParams()[$moduleClass]]);
                }
            }
        }
    }

    public static function passModuleParams(): array
    {
        return [];
    }

    public static function initSetup(ContainerBuilder $container): void
    {
        static::container($container);
        static::loadModules($container);

        $container->compile(true);
    }
}