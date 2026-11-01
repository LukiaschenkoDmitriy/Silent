<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\W3C;

use Silent\Core\Command\W3C\Screenshots\TakeElementScreenshotCommand;
use Silent\Core\Command\W3C\Screenshots\TakeScreenshotCommand;

class W3CScreenshotScope extends AbstractW3CScope {
    public function screenshot(string $file): void
    {
        file_put_contents($file, base64_decode($this->e->execute(new TakeScreenshotCommand($this->s)), true));
    }

    public function screenshotElement(string $elementId, string $file): void
    {
        file_put_contents($file, base64_decode($this->e->execute(new TakeElementScreenshotCommand($elementId, $this->s)), true));
    }
}