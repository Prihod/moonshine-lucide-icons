<?php

use Illuminate\Support\Facades\Artisan;

it('publish blade-icons config file', function (): void {

    // Run the icon blade publishing command
    Artisan::call('vendor:publish', [
        '--tag' => 'moonshine-lucide-icons-config',
        '--force' => true,
    ]);

    // Check that the configuration file was published
    $configPath = config_path('moonshine-lucide-icons.php');
    expect(file_exists($configPath))->toBeTrue();

});
