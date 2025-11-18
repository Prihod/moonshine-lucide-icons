<?php

namespace Prihod\MoonShineLucideIcons\Support;

use Composer\InstalledVersions;

class MoonshineVersion implements MoonshineVersionContract
{
    public function major(): int
    {
        $version = InstalledVersions::getVersion('moonshine/moonshine');

        return (int) explode('.', (string) $version)[0];
    }
}
