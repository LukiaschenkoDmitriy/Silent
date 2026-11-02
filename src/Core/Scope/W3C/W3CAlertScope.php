<?php declare(strict_types=1);

namespace Silent\Core\Scope\W3C;

use Silent\Core\Scope\AbstractScope;
use Silent\Core\Command\W3C\Alert\AlertAcceptCommand;
use Silent\Core\Command\W3C\Alert\AlertDismissCommand;
use Silent\Core\Command\W3C\Alert\AlertSendTextCommand;
use Silent\Core\Command\W3C\Alert\GetAllertTextCommand;

class W3CAlertScope extends AbstractScope {
    public function accept(): void
    {
        $this->e->execute(new AlertAcceptCommand($this->s));
    }

    public function dismiss(): void
    {
        $this->e->execute(new AlertDismissCommand($this->s));
    }

    public function sendText(string $text): void
    {
        $this->e->execute(new AlertSendTextCommand($text, $this->s));
    }

    public function get(): string
    {
        return $this->e->execute(new GetAllertTextCommand($this->s));
    }
}