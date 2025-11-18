<?php

use BladeUI\Icons\Factory;
use Illuminate\Support\Facades\Artisan;

it('registers the lucide icon set', function (): void {

    // Run the icon publishing command
    Artisan::call('vendor:publish', [
        '--tag' => 'moonshine-lucide-icons',
    ]);

    // Check that the icon directory exists in the public folder
    $path = public_path('vendor/moonshine-lucide-icons');
    expect($path)->toBeDirectory();

    // Check that the icon set is registered
    $factory = app(Factory::class);
    $iconSet = $factory->all();

    // Assert that the "lucide" icon set is available
    expect($iconSet)->toHaveKey('lucide');

});
