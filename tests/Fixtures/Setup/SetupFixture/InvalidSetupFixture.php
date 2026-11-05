<?php declare(strict_types=1);

namespace Tests\Fixtures\Setup\SetupFixture;

use Silent\Core\Scope\Scope;
use Silent\Core\Setup\CoreSetup;
use Symfony\Component\DependencyInjection\ContainerInterface;

class InvalidSetupFixture extends CoreSetup {
    public static function modules(ContainerInterface $container): array
    {
        return [Scope::class];
    }
}