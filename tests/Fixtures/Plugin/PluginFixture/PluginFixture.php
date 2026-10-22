<?php declare(strict_types=1);

namespace Tests\Fixtures\Plugin\PluginFixture;

use Silent\Core\Command\W3C\Navigation\NavigateForwardCommand;
use Silent\Core\Command\W3C\Navigation\NavigateToCommand;
use Silent\Core\DTO\Capabilities\Capabilities;
use Silent\Core\DTO\Capabilities\Chrome\ChromeFeatures;
use Silent\Core\DTO\Capabilities\Chrome\ChromeOptions;
use Silent\Core\DTO\Capabilities\Chrome\ChromeSwitches;
use Silent\Core\DTO\Capabilities\Enum\BrowserName;
use Silent\Core\Plugin\Plugin;

class PluginFixture extends Plugin {
    public function capabilities(Capabilities $capabilities, ChromeOptions $options): void
    {
        $capabilities->alwaysMatch->browserName = BrowserName::CHROME;
        $options->setFeature(ChromeFeatures::AAPMBlocksWebGPU);
        $options->setSwitch(ChromeSwitches::WindowSize, ["1920", "1080"]);
        $options->setExcludeSwitches(["testExclude"]);
    }

    public function commands(): array
    {
        return [
            new NavigateToCommand("google.com"),
            new NavigateForwardCommand()
        ];
    }
}