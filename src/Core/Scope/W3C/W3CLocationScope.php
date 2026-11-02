<?php declare(strict_types=1);

namespace Silent\Core\Scope\W3C;

use Silent\Core\Scope\AbstractScope;
use Silent\Core\Command\W3C\Location\GetLocationCommand;
use Silent\Core\Command\W3C\Location\SetLocationCommand;
use Silent\Core\DTO\Location\Location;

class W3CLocationScope extends AbstractScope {
    public function getLocation(): Location
    {
        return $this->e->execute(new GetLocationCommand($this->s));
    }

    public function setLocation(Location $location): void
    {
        $this->e->execute(new SetLocationCommand($location, $this->s));
    }
}