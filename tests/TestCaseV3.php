<?php

namespace Prihod\MoonShineLucideIcons\Tests;

use Mockery;
use Prihod\MoonShineLucideIcons\Support\MoonshineVersionContract;

abstract class TestCaseV3 extends TestCase
{
    protected function defineEnvironment($app): void
    {
        parent::defineEnvironment($app);

        $mock = Mockery::mock(MoonshineVersionContract::class);
        $mock->shouldReceive('major')->andReturn(3);
        $app->instance(MoonshineVersionContract::class, $mock);
    }
}
