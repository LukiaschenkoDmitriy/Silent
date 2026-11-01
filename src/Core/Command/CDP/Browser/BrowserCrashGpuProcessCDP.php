<?php declare(strict_types=1);

namespace Silent\Core\Command\CDP\Browser;

use Silent\Core\Command\CDP\CDPCommand;

class BrowserCrashGpuProcessCDP extends CDPCommand {
    public function command(): string
    {
        return "Browser.crashGpuProcess";
    }
}