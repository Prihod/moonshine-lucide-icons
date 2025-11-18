<?php

namespace Prihod\MoonShineLucideIcons\Providers;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use Prihod\MoonShineLucideIcons\Support\MoonshineVersion;
use Prihod\MoonShineLucideIcons\Support\MoonshineVersionContract;

final class MoonShineLucideIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->app->singleton(MoonshineVersionContract::class, MoonshineVersion::class);

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container): void {
            $config = $container->make('config')->get('moonshine-lucide-icons', []);
            $factory->add('lucide', array_merge([
                'path' => __DIR__ . '/../../resources/svg',
            ], $config));
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublications();
        }
    }

    protected function registerPublications(): void
    {
        $this->publishes([
            __DIR__ . '/../../resources/svg' => public_path('vendor/moonshine-lucide-icons'),
        ], 'moonshine-lucide-icons');

        $this->publishes([
            $this->bladeViewPath() => resource_path('views/vendor/moonshine/components/icon.blade.php'),
        ], 'moonshine-lucide-icons-blade');

        $this->publishes([
            __DIR__ . '/../../config/moonshine-lucide-icons.php' => $this->app->configPath('moonshine-lucide-icons.php'),
        ], 'moonshine-lucide-icons-config');
    }

    protected function bladeViewPath(): string
    {
        $major = $this->app->make(MoonshineVersionContract::class)->major();

        return $major >= 4
            ? __DIR__ . '/../../resources/views/v4/icon.blade.php'
            : __DIR__ . '/../../resources/views/v3/icon.blade.php';
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/moonshine-lucide-icons.php', 'moonshine-lucide-icons');
    }
}
