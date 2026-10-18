<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities\Chrome;

use Symfony\Component\Serializer\Attribute\Ignore;

final class ChromeOptions
{
    public function __construct(
        #[Ignore] private array $features = [],
        #[Ignore] private array $switches = [],
        #[Ignore] private array $excludeSwitches = []
    ) { }

    public function setExcludeSwitches(array $switches): void
    {
        $this->excludeSwitches = $switches;
    }

    public function getExcludeSwitches(): array
    {
        return $this->excludeSwitches;
    }

    public function setFeature(ChromeFeatures $feature): void
    {
        $this->removeFeature($feature);
        $this->features[] = $feature;
    }

    public function removeFeature(ChromeFeatures $feature): void
    {
        $this->features = array_filter($this->features, fn($f) => $f !== $feature);
    }

    public function setSwitch(ChromeSwitches $switch, array $params = []): void
    {
        $this->removeSwitch($switch);
        $this->switches[] = [$switch, $params];
    }

    public function removeSwitch(ChromeSwitches $switch): void
    {
        $this->switches = array_filter($this->switches, fn($s) => $s[0] !== $switch);
    }

    public function getArgs(): array
    {
        $args = [];

        if (!empty($this->features)) {
            $args[] = "--enable-features=" . implode(",", array_map(fn($feature) => $feature->value, $this->features));
        }

        foreach ($this->switches as $switch) {
            $args[] = sprintf("%s=%s", $switch[0]->value, implode(",", $switch[1]));
        }

        return $args;
    }
}