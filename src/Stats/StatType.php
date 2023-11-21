<?php

namespace Cybertale\Definition\Stats;

use Cybertale\Definition\Helpers\StatsEnum;

class StatType
{
    /**
     * @return array<int, StatClosure>
     */
    public static function getCaseFunctionMapping (): array {
        return [
            StatsEnum::Label->value => new StatClosure(fn(): StatAbstract => (new Label())->createStat()),
        ];
    }
}
