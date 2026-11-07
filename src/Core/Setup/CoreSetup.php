<?php declare(strict_types=1);

namespace Silent\Core\Setup;

use Override;
use Silent\Core\DI\ContainerLoader;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\CapabilityMatch;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\DTO\Capabilities\Enum\BrowserName;
use Silent\Core\Module\ModuleInterface;
use Silent\Core\Module\ModuleRegistry;
use Silent\Core\Registry\RegistryInterface;
use Silent\Core\Setup\Events\ModuleRegisterEvent;
use Silent\Core\WebDriver\Events\AfterCreateSessionEvent;
use Silent\Core\WebDriver\Events\BeforeCreateSessionEvent;
use Silent\Core\WebDriver\WebDriver;
use Silent\Core\WebDriver\WebDriverInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

abstract class CoreSetup implements SetupInterface {
    private RegistryInterface $moduleRegistry;
    private EventDispatcherInterface $dispatcher;
    private WebDriverInterface $webdriver;
    public function __construct(private ContainerInterface $container) {
        $this->moduleRegistry = new ModuleRegistry();
        $this->dispatcher = $container->get(EventDispatcherInterface::class);
    }

    public function hub(): ?string
    {
        return null;
    }

    public function setWebDriver(WebDriverInterface $webdriver): WebDriverInterface
    {
        $this->webdriver = $webdriver;
        return $this->webdriver;
    }

    public function getWebDriver(): WebDriverInterface
    {
        if (isset($this->webdriver)) return $this->webdriver;

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
                if ($session)
                    return $this->setWebDriver($session);
                else {
                    return $this->setWebDriver($this->getWebDriverWithCapabilitites());
                }
            }

            if ($flags & SetupOptions::ONLY_GET_EXISTED) {
                return $this->setWebDriver(WebDriver::getFirstSession());
            }

            if ($flags & SetupOptions::CLOSE_ALL_AND_CREATE_NEW) {
                WebDriver::closeAllSessions();
                return $this->setWebDriver($this->getWebDriverWithCapabilitites());
            }
        }

        return $this->setWebDriver($this->getWebDriverWithCapabilitites());
    }

    private function getWebDriverWithCapabilitites(): WebDriver {
        $capabilities = $this->capabilities();

        if (isset($this->dispatcher)) {
            $this->dispatcher->dispatch(new BeforeCreateSessionEvent($capabilities, $capabilities->alwaysMatch->chromeOptions));
        }

        /** @var ModuleInterface $module */
        foreach ($this->moduleRegistry as $module) {
            $module::capabilities($capabilities, $capabilities->alwaysMatch->chromeOptions);
        }

        $webdriver = WebDriver::createSession($capabilities);

        $webdriver->init();

        if (isset($this->dispatcher)) {
            $this->dispatcher->dispatch(new AfterCreateSessionEvent($webdriver->getSession(), $webdriver));
        }

        return $webdriver;
    }

    public function capabilities(): Capabilities
    {
        return new Capabilities(new CapabilityMatch(BrowserName::CHROME, new ChromeOptions()));
    }

    public function listeners(EventDispatcherInterface $dispatcher): void {}

    public function __invoke()
    {
        $webdriver = $this->getWebDriver();
        $webdriver->setEventDispatcher($this->dispatcher);
        
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
            $module = $this->dispatcher->dispatch(new ModuleRegisterEvent($module::class, $module))->module;
            if ($module) {
                $this->moduleRegistry->add($module::class, $module);
            }
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