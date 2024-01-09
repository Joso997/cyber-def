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
            StatsEnum::Value->value => new StatClosure(fn() => (new Value())->createStat()),
            StatsEnum::Design->value => new StatClosure(fn() => (new Design())->createStat()),
            StatsEnum::Tag->value => new StatClosure(fn() => (new Tag())->createStat()),
            StatsEnum::Id->value => new StatClosure(fn() => (new Id())->createStat()),
            StatsEnum::ElementType->value => new StatClosure(fn() => (new ElementType())->createStat()),
            StatsEnum::Placeholder->value => new StatClosure(fn() => (new Placeholder())->createStat()),
            StatsEnum::ItemList->value => new StatClosure(fn() => (new ItemList())->createStat()),
            StatsEnum::Tooltip->value => new StatClosure(fn() => (new Tooltip())->createStat()),
            StatsEnum::Required->value => new StatClosure(fn() => (new Required())->createStat()),
            StatsEnum::Disabled->value => new StatClosure(fn() => (new Disabled())->createStat()),
            StatsEnum::AutoComplete->value => new StatClosure(fn() => (new AutoComplete())->createStat()),
            StatsEnum::BelongsTo->value => new StatClosure(fn() => (new BelongsTo())->createStat()),
            StatsEnum::ErrorMessage->value => new StatClosure(fn() => (new ErrorMessage())->createStat()),
            StatsEnum::IsValid->value => new StatClosure(fn() => (new IsValid())->createStat()),
            StatsEnum::Order->value => new StatClosure(fn() => (new Order())->createStat()),
            StatsEnum::DependsOn->value => new StatClosure(fn() => (new DependsOn())->createStat()),
            StatsEnum::Name->value => new StatClosure(fn() => (new Name())->createStat()),
            StatsEnum::Inherit->value => new StatClosure(fn() => (new Inherit())->createStat()),
            StatsEnum::BreakLine->value => new StatClosure(fn() => (new BreakLine())->createStat()),
            StatsEnum::ValueIndices->value => new StatClosure(fn() => (new ValueIndices())->createStat()),
            StatsEnum::OptionIndices->value => new StatClosure(fn() => (new OptionIndices())->createStat()),
            StatsEnum::Option->value => new StatClosure(fn() => (new Option())->createStat()),
        ];
    }
}
