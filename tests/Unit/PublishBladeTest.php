<?php

use Illuminate\Support\Facades\Artisan;

it('publish moonshine icon.blade.php', function (): void {

    // Run the icon blade publishing command
    Artisan::call('vendor:publish', [
        '--tag' => 'moonshine-lucide-icons-blade',
        '--force' => true,
    ]);

    // Check that the icon.blade.php file has been published to the correct directory
    $publishedFile = resource_path('views/vendor/moonshine/components/icon.blade.php');
    expect(file_exists($publishedFile))->toBeTrue();

    // Check that the file exists and that it is a file
    expect(is_file($publishedFile))->toBeTrue();

    $expectedContent = file_get_contents(__DIR__ . '/../../resources/views/icon.blade.php');
    $actualContent = file_get_contents($publishedFile);

    expect($actualContent)->toEqual($expectedContent);

});
