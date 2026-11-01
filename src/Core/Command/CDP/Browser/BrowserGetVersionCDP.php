<?php declare(strict_types=1);

namespace Silent\Core\Command\CDP\Browser;

use Silent\Core\Command\CDP\CDPCommand;
use Silent\Core\DTO\CDP\Browser\BrowserVersion;

class BrowserGetVersionCDP extends CDPCommand {
    public function command(): string
    {
        return "Browser.getVersion";
    }

    public function result(): ?string
    {
        return BrowserVersion::class;
    }
}