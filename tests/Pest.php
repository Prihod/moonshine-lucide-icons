<?php

declare(strict_types=1);

use Prihod\MoonShineLucideIcons\Tests\TestCase;
use Prihod\MoonShineLucideIcons\Tests\TestCaseV3;
use Prihod\MoonShineLucideIcons\Tests\TestCaseV4;
use Spatie\Snapshots\MatchesSnapshots;

uses(TestCase::class)->in('Feature', 'Unit/Common');
uses(TestCaseV3::class)->in('Unit/V3');
uses(TestCaseV4::class)->in('Unit/V4');
uses(MatchesSnapshots::class)->in('Unit');
