<?php declare(strict_types=1);

namespace Silent\Core\Setup;

use Silent\Core\DI\ContainerLoader;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\CapabilityMatch;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\DTO\Capabilities\Enum\BrowserName;
use Silent\Core\Module\ModuleInterface;
use Silent\Core\Module\ModuleRegistry;
use Silent\Core\Registry\RegistryInterface;
use Silent\Core\WebDriver\WebDriver;
use Silent\Core\WebDriver\WebDriverInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

abstract class CoreSetup implements SetupInterface {
    private RegistryInterface $moduleRegistry;
    public function __construct(private ContainerInterface $container) {
        $this->moduleRegistry = new ModuleRegistry();
    }
    public function hub(): ?string
    {
        return null;
    }

    public function getWebDriver(): WebDriver
    {
        if ($this->hub())
            WebDriver::setHub($this->hub());

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
                if ($session)
                    return $session;
                else {
                    return $this->getWebDriverWithCapabilitites();
                }
            }

            if ($flags & SetupOptions::ONLY_GET_EXISTED) {
                return WebDriver::getFirstSession();
            }

            if ($flags & SetupOptions::CLOSE_ALL_AND_CREATE_NEW) {
                WebDriver::closeAllSessions();
                return $this->getWebDriverWithCapabilitites();
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

        $webdriver->getExecutor()->setEventDispatcher($this->container->get(EventDispatcherInterface::class));

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

    public function run(WebDriverInterface $webdriver, ContainerInterface $container): void { }

    public function setModules(iterable $modules): void
    {
        foreach ($modules as $module) {
            $this->moduleRegistry->add($module::class, $module);
        }
    }

    public function getModule(string $moduleClass): ?object
    {
        return $this->moduleRegistry->get($moduleClass);
    }

    public static function modules(ContainerInterface $container): array
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