<?php declare(strict_types=1);

namespace Silent\Core\Command\CDP\Browser;

use Silent\Core\Command\CDP\CDPCommand;

class BrowserCrashCDP extends CDPCommand {
    public function command(): string
    {
        return "Browser.crash";
    }
}