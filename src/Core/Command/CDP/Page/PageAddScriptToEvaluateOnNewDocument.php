<?php declare(strict_types=1);

namespace Silent\Core\Command\CDP\Page;

use Silent\Core\Command\CDP\CDPCommand;

class PageAddScriptToEvaluateOnNewDocument extends CDPCommand {
    public function __construct(
        public string $source,
        public bool $includeCommandLineAPI = false,
        public bool $runImmediately = false,
    ) {}
    public function command(): string
    {
        return "Page.addScriptToEvaluateOnNewDocument";
    }
}