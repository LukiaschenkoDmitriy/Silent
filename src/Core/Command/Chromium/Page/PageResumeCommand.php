<?php declare(strict_types=1);

namespace Silent\Core\Command\Chromium\Page;

use Silent\Core\Command\W3C\W3CSessionCommand;

class PageResumeCommand extends W3CSessionCommand {
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/goog/page/resume", $this->sessionId);
    }
}