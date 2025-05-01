<?php

namespace Prihod\MoonShineLucideIcons\Providers;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class MoonShineLucideIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container): void {

            $config = $container->make('config')->get('moonshine-lucide-icons', []);
            $factory->add('lucide', array_merge(['path' => __DIR__ . '/../../resources/svg'], $config));
        });

    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../resources/svg' => public_path('vendor/moonshine-lucide-icons'),
            ], 'moonshine-lucide-icons');

            $this->publishes([
                __DIR__ . '/../../resources/views/icon.blade.php' => resource_path('views/vendor/moonshine/components/icon.blade.php'),
            ], 'moonshine-lucide-icons-blade');

            $this->publishes([
                __DIR__ . '/../../config/moonshine-lucide-icons.php' => $this->app->configPath('moonshine-lucide-icons.php'),
            ], 'moonshine-lucide-icons-config');

        }
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/moonshine-lucide-icons.php', 'moonshine-lucide-icons');
    }
}
