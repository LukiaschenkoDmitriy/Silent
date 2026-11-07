<?php declare(strict_types=1);

namespace Silent\Core\Scope\Chromium;

use Silent\Core\Command\Chromium\HeapSnapshotCommand;
use Silent\Core\Scope\AbstractScope;
use Silent\Core\WebDriver\WebDriverInterface;

class ChromiumScope extends AbstractScope {
    public ChromiumCastScope $cast;
    public ChromiumCDPScope $cdp;
    public ChromiumNetworkScope $network;
    public ChromiumPageScope $page;
    public function __construct(WebDriverInterface $webdriver)
    {
        parent::__construct($webdriver);

        $this->cast = new ChromiumCastScope($webdriver);
        $this->cdp = new ChromiumCDPScope($webdriver);
        $this->network = new ChromiumNetworkScope($webdriver);
        $this->page = new ChromiumPageScope($webdriver);
    }

    public function heapSnapshot(string $filepath) {
        $this->e->execute(new HeapSnapshotCommand($filepath, $this->s));
    }
}