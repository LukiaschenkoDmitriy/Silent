<?php declare(strict_types=1);

namespace Silent\Core\Command\W3C\Location;

use Silent\Core\Command\W3C\W3CSessionCommand;
use Silent\Core\DTO\Location\Location;
use Symfony\Component\Validator\Constraints\Valid;

class SetLocationCommand extends W3CSessionCommand {
    public function __construct(
        #[Valid]
        public Location $location, 
        ?string $sessionId = null)
    {
        parent::__construct($sessionId);
    }
    public function method(): string
    {
        return static::POST_METHOD;
    }

    public function url(): string
    {
        return sprintf("/session/%s/location", $this->sessionId);
    }
}