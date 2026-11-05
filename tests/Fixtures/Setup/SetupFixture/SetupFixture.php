<?php declare(strict_types=1);

namespace Tests\Fixtures\Setup\SetupFixture;

use Silent\Core\Setup\CoreSetup;
use Silent\Core\Setup\SetupOptions;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Tests\Fixtures\Module\ModuleFixture\ModuleFixture;

#[SetupOptions(SetupOptions::GET_EXISTED_SESSION_OR_CREATE)]
final class SetupFixture extends CoreSetup {
    public static function modules(ContainerInterface $container): array
    {
        return [ModuleFixture::class];
    }
}