<?php declare(strict_types=1);

namespace Silent\Core\Plugin;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\HttpExecutor\HttpExecutor;

class PluginManager implements PluginManagerInterface {
    /**
     * Summary of plugins
     * @var array<PluginInterface>
     */
    private array $plugins = [];
    public function getPlugins(): array
    {
        return $this->plugins;
    }

    public function addPlugin(PluginInterface $plugin): void
    {
        if (in_array($plugin::class, $this->getPluginsClass())) return;
        $this->plugins[] = $plugin;
    }

    public function removePlugin(string $pluginClass): void
    {
        if (!in_array($pluginClass, $this->getPluginsClass())) return;
        $this->plugins = array_filter($this->plugins, fn(PluginInterface $p) => $p::class !== $pluginClass);
    }

    public function processOptions(ChromeOptions $options): void
    {
        foreach ($this->plugins as $plugin) {
            $plugin->options($options);
        }
    }

    public function processCommand(HttpExecutor $httpExecutor, string $sessionId): array
    {
        $pluginResults = [];
        foreach($this->plugins as $plugin) {
            $pluginResults[$plugin::class] = [];
            foreach ($plugin->commands() as $command) {
                if ($command instanceof W3CSessionCommand) {
                    $command->setSessionId($sessionId);
                }

                $pluginResults[$plugin::class][] = $httpExecutor->executeW3C($command);
            }
        }

        return $pluginResults;
    }

    private function getPluginsClass(): array {
        return array_map(fn(PluginInterface $p) => $p::class, $this->plugins);
    }

    public static function getPluginCommandsResult(array $plugins, string $pluginClass): array
    {
        if (in_array($pluginClass, array_keys($plugins))) {
            return $plugins[$pluginClass];
        }

        return [];
    }
}