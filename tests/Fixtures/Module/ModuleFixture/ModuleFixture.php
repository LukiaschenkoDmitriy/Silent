<?php declare(strict_types=1);

namespace Tests\Fixtures\Module\ModuleFixture;

use Closure;
use Silent\Core\Module\Module;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Tests\Fixtures\Plugin\PluginFixture\PluginFixture;

class ModuleFixture extends Module {
    public static function plugins(): array
    {
        return [
            PluginFixture::class
        ];
    }

    public static function load(): Closure
    {
        return function (ContainerBuilder $builder, FileLocator $locator) {
            (new PhpFileLoader($builder, $locator))->load("load.php");
        };
    }
}