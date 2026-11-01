<?php declare(strict_types=1);

namespace Silent\Core\Command\CDP\Browser;

use Silent\Core\Command\CDP\CDPCommand;

class BrowserResetPermissionsCDP extends CDPCommand {
    public function __construct(public ?string $browserContextId = null) {}
    public function command(): string
    {
        return "Browser.resetPermissions";
    }
}