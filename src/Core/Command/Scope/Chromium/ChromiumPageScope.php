<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\Chromium;

use Silent\Core\Command\Chromium\Page\PageFreezeCommand;
use Silent\Core\Command\Chromium\Page\PageResumeCommand;
use Silent\Core\Command\Scope\AbstractScope;

class ChromiumPageScope extends AbstractScope {
    public function freeze(): void
    {
        $this->e->execute(new PageFreezeCommand($this->s));
    }

    public function resume(): void
    {
        $this->e->execute(new PageResumeCommand($this->s));
    }
}