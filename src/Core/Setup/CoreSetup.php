<?php declare(strict_types=1);

namespace Silent\Core\Setup;

use Silent\Core\DI\ContainerLoader;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\CapabilityMatch;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\DTO\Capabilities\Enum\BrowserName;
use Silent\Core\Module\ModuleInterface;
use Silent\Core\Module\ModuleRegistry;
use Silent\Core\Plugin\PluginRegistry;
use Silent\Core\Registry\RegistryInterface;
use Silent\Core\WebDriver\WebDriver;
use Silent\Core\WebDriver\WebDriverInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class CoreSetup implements SetupInterface {
    public function __construct(private ContainerInterface $container) {
        $this->moduleRegistry = new ModuleRegistry();
        $this->pluginRegistry = new PluginRegistry();
    }
    private RegistryInterface $moduleRegistry;
    private RegistryInterface $pluginRegistry;
    public function hub(): ?string
    {
        return null;
    }

    public function getWebDriver(): WebDriver
    {
        if ($this->hub()) WebDriver::setHub($this->hub());

        $class = new \ReflectionClass(static::class);
        $attributes = $class->getAttributes(SetupOptions::class);

        if (count($attributes) == 1) {
            /**
             * @var SetupOptions $attribute
             */
            $attribute = $attributes[0]->newInstance();
            $flags = $attribute->flags;

            if ($flags & SetupOptions::GET_EXISTED_SESSION_OR_CREATE) {
                $session = WebDriver::getFirstSession();
                if ($session) return $session;
                else {
                    return $this->getWebDriverWithCapabilitites();
                }
            }

            if ($flags & SetupOptions::ONLY_GET_EXISTED) {
                return WebDriver::getFirstSession();
            }
        }

        return $this->getWebDriverWithCapabilitites();
    }

    private function getWebDriverWithCapabilitites(): WebDriver {
        $capabilities = $this->capabilities();

        /** @var ModuleInterface $module */
        foreach ($this->moduleRegistry as $module) {
            $module::capabilities($capabilities, $capabilities->alwaysMatch->chromeOptions);
        }

        $webdriver = WebDriver::createSession($capabilities);

        $webdriver->plugins()->merge($this->pluginRegistry);

        $webdriver->init();

        return $webdriver;
    }

    public function capabilities(): Capabilities
    {
        return new Capabilities(new CapabilityMatch(BrowserName::CHROME, new ChromeOptions()));
    }

    public function __invoke()
    {
        $webdriver = $this->getWebDriver();
        
        /** @var ModuleInterface $module */
        foreach ($this->moduleRegistry as $module) {
            if (!$module->run($webdriver, $this->container)) {
                $webdriver->closeSession();
                return;
            }
        }

        $this->run($webdriver, $this->container);

        return $webdriver;
    }

    public function pluginRegistry(): PluginRegistry
    {
        return $this->pluginRegistry;
    }

    public function moduleRegistry(): ModuleRegistry
    {
        return $this->moduleRegistry;
    }

    public function run(WebDriverInterface $webdriver, ContainerInterface $container): void { }

    public function setPlugins(iterable $plugins): void
    {
        foreach ($plugins as $plugin) {
            $this->pluginRegistry->add($plugin::class, $plugin);
        }
    }

    public function setModules(iterable $modules): void
    {
        foreach ($modules as $module) {
            $this->moduleRegistry->add($module::class, $module);
        }
    }

    public static function plugins(): array
    {
        return [];
    }

    public static function modules(ContainerInterface $container): array
    {
        return [];
    }

    public static function passModuleParams(ContainerInterface $container): array
    {
        return [];
    }

    public static function init(ContainerBuilder $builder): SetupInterface
    {
        ContainerLoader::loadSetup($builder, static::class);
        
        $setup = $builder->get(static::class);
        $setup->__invoke();

        return $setup;
    }
}