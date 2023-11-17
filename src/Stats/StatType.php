<?php

namespace Cybertale\Definition\Stats;

use Cybertale\Definition\Helpers\StatsEnum;

class StatType
{
    /**
     * @return array<int, StatAbstract>
     */
    public static function getCaseFunctionMapping (): array {
        return [
            StatsEnum::Label->value => fn() => (new Label())->createStat(),
        ];
    }
}
