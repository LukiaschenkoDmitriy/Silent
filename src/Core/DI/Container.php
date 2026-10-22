<?php declare(strict_types=1);

namespace Silent\Core\DI;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

final class Container extends ContainerBuilder {
    public function __construct(?ParameterBagInterface $parameterBag = null)
    {
        parent::__construct($parameterBag);

        $configDir = dirname(__DIR__, 3) . "/config";

        if (file_exists($configDir . "/services.php")) {
            (new PhpFileLoader($this, new FileLocator($configDir)))->load("services.php");
        }
    }
}