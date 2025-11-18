<?php

namespace Prihod\MoonShineLucideIcons\Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use MoonShine\Laravel\Commands\InstallCommand;
use MoonShine\Laravel\Providers\MoonShineServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Prihod\MoonShineLucideIcons\Providers\MoonShineLucideIconsServiceProvider;
use Prihod\MoonShineLucideIcons\Support\MoonshineVersion;
use Prihod\MoonShineLucideIcons\Support\MoonshineVersionContract;

abstract class TestCase extends OrchestraTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function defineEnvironment($app): void
    {
        $app->useAppPath(__DIR__ . '/laravel-app/app');
        $app->useStoragePath(__DIR__ . '/laravel-app/storage');

        $app['config']->set('app.debug', 'true');
        $app['config']->set('moonshine.cache', 'array');
        $app['config']->set('moonshine-lucide-icons', [
            'prefix' => 'lucide',
        ]);

        $app->singleton(MoonshineVersionContract::class, MoonshineVersion::class);
    }

    protected function performApplication(): static
    {
        $this->artisan(InstallCommand::class, [
            '--without-user' => true,
            '--without-migrations' => true,
            '--tests-mode' => true,
        ]);

        $this->artisan('optimize:clear');

        return $this;
    }

    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            MoonShineServiceProvider::class,
            MoonShineLucideIconsServiceProvider::class,
        ];
    }
}
