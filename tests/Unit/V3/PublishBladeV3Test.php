<?php

use Illuminate\Support\Facades\File;

it('publishes v3 blade template when MoonShine is v3', function (): void {
    $this->artisan('vendor:publish', [
        '--tag' => 'moonshine-lucide-icons-blade',
        '--force' => true,
    ])->assertExitCode(0);

    $target = resource_path('views/vendor/moonshine/components/icon.blade.php');

    expect(File::exists($target))->toBeTrue();

    $content = File::get($target);

    expect($content)->toContain('MoonShine v3');
});
