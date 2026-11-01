<?php declare(strict_types=1);

namespace Silent\Core\Command\CDP\Browser;

use Silent\Core\Command\CDP\CDPCommand;

class BrowserAddPrivacySandboxEnrollmentOverrideCDP extends CDPCommand {
    public function __construct(public string $url) {}
    public function command(): string
    {
        return "Browser.addPrivacySandboxEnrollmentOverride";
    }
}