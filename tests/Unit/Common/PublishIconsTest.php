<?php

use Illuminate\Support\Facades\Artisan;

it('publish icons files', function (): void {

    // Run the icon blade publishing command
    Artisan::call('vendor:publish', [
        '--tag' => 'moonshine-lucide-icons',
        '--force' => true,
    ]);

    // Check that the icons were published to the correct directory
    $iconPath = public_path('vendor/moonshine-lucide-icons');
    expect(is_dir($iconPath))->toBeTrue();

    // Ensure there is at least one file in the icon directory
    $files = glob($iconPath . '/*.svg');
    expect(\count($files))->toBeGreaterThan(0);

});
