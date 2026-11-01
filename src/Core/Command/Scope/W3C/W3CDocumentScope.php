<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\W3C;

use Silent\Core\Builder\JsFileBuilder;
use Silent\Core\Command\Scope\AbstractScope;
use Silent\Core\Command\W3C\Document\ExecuteAsyncScriptCommand;
use Silent\Core\Command\W3C\Document\ExecuteScriptCommand;
use Silent\Core\Command\W3C\Document\GetPageSourceCommand;
use Silent\Core\Command\W3C\Document\GetTitleCommand;

class W3CDocumentScope extends AbstractScope {
    public function asyncScript(string $filePath, array $jsVars = [], array $args = []): string
    {
        $script = JsFileBuilder::build($filePath, $jsVars);
        return $this->e->execute(new ExecuteAsyncScriptCommand($script, $args, $this->s));
    }

    public function syncScript(string $filePath, array $jsVars = [], array $args = []): string
    {
        $script = JsFileBuilder::build($filePath, $jsVars);
        return $this->e->execute(new ExecuteScriptCommand($script, $args, $this->s));
    }

    public function getPageSource(): string
    {
        return $this->e->execute(new GetPageSourceCommand($this->s));
    }

    public function getTitle(): string
    {
        return $this->e->execute(new GetTitleCommand($this->s));
    }
}