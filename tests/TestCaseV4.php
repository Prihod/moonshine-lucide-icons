<?php

namespace Prihod\MoonShineLucideIcons\Tests;

use Mockery;
use Prihod\MoonShineLucideIcons\Support\MoonshineVersionContract;

abstract class TestCaseV4 extends TestCase
{
    protected function defineEnvironment($app): void
    {
        parent::defineEnvironment($app);

        $mock = Mockery::mock(MoonshineVersionContract::class);
        $mock->shouldReceive('major')->andReturn(4);
        $app->instance(MoonshineVersionContract::class, $mock);
    }
}
