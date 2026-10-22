<?php declare(strict_types=1);

namespace Tests\Fixtures\Setup\SetupFixture;

use Silent\Core\Setup\CoreSetup;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Tests\Fixtures\Plugin\PluginFixture\PluginFixture;

class InvalidSetupFixture extends CoreSetup {
    public static function modules(ContainerInterface $container): array
    {
        return [PluginFixture::class];
    }
}