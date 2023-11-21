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
            StatsEnum::Value->value => fn() => (new Value())->createStat(),
            StatsEnum::Design->value => fn() => (new Design())->createStat(),
            StatsEnum::Tag->value => fn() => (new Tag())->createStat(),
            StatsEnum::Id->value => fn() => (new Id())->createStat(),
            StatsEnum::ElementType->value => fn() => (new ElementType())->createStat(),
            StatsEnum::Placeholder->value => fn() => (new Placeholder())->createStat(),
            StatsEnum::ItemList->value => fn() => (new ItemList())->createStat(),
            StatsEnum::Tooltip->value => fn() => (new Tooltip())->createStat(),
            StatsEnum::Required->value => fn() => (new Required())->createStat(),
            StatsEnum::Disabled->value => fn() => (new Disabled())->createStat(),
            StatsEnum::AutoComplete->value => fn() => (new AutoComplete())->createStat(),
            StatsEnum::BelongsTo->value => fn() => (new BelongsTo())->createStat(),
            StatsEnum::ErrorMessage->value => fn() => (new ErrorMessage())->createStat(),
            StatsEnum::IsValid->value => fn() => (new IsValid())->createStat(),
            StatsEnum::Order->value => fn() => (new Order())->createStat(),
            StatsEnum::DependsOn->value => fn() => (new DependsOn())->createStat(),
        ];
    }
}
