<?php declare(strict_types=1);

namespace Silent\Core\Command\Scope\Chromium;

use Silent\Core\Command\Chromium\Network\DeleteNetworkConditionsCommand;
use Silent\Core\Command\Chromium\Network\GetNetworkConditionsCommand;
use Silent\Core\Command\Chromium\Network\SetNetworkConditionsCommand;
use Silent\Core\Command\Scope\AbstractScope;
use Silent\Core\DTO\Network\NetworkConditions;
use Silent\Core\DTO\Network\NetworkPreset;

class ChromiumNetworkScope extends AbstractScope {
    public function deleteConditions(): void
    {
        $this->e->execute(new DeleteNetworkConditionsCommand($this->s));
    }

    public function getConditions(): NetworkConditions
    {
        return $this->e->execute(new GetNetworkConditionsCommand($this->s));
    }

    public function setConditions(NetworkConditions|NetworkPreset $conditions): void
    {
        $this->e->execute(new SetNetworkConditionsCommand($conditions, $this->s));
    }
}