<?php declare(strict_types=1);

namespace Silent\Core\WebDriver;

use Silent\Core\Command\W3C\W3CCommandInterface;

interface WebDriverExecutorInterface {
    public function executeW3C(W3CCommandInterface $w3CCommand): mixed;
}