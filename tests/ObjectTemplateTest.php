<?php

namespace Cybertale\Definition\Tests;

use PHPUnit\Framework\TestCase;
use Cybertale\Definition\ObjectTemplate;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Stats\Label;
use Cybertale\Definition\Stats\Value;

class ObjectTemplateTest extends TestCase
{
    public function testStatsToArrayReturnsSimplifiedStructure(): void
    {
        $labelStat = (new Label())->setData('Test Label');
        $valueStat = (new Value())->setData(123);

        $statsInput = [
            StatsEnum::Label->value => $labelStat,
            StatsEnum::Value->value => $valueStat,
        ];

        $template = new ObjectTemplate(
            RegionsEnum::Form,
            ObjectsEnum::Field,
            SubObjectsEnum::Middle,
            ActionsEnum::Click,
            $statsInput
        );

        $expectedArray = [
            StatsEnum::Label->value => 'Test Label',
            StatsEnum::Value->value => 123,
        ];

        $this->assertSame($expectedArray, $template->statsToArray());
    }
}
