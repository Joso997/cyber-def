<?php

namespace Cybertale\Definition\Stats;

use Cybertale\Definition\Helpers\StatsEnum;

class StatType
{
    /**
     * @return array<int, class-string<StatAbstract>>
     */
    public static function getStatClassMapping (): array {
        return [
            StatsEnum::Label->value => \Cybertale\Definition\Stats\Label::class,
            StatsEnum::Value->value => \Cybertale\Definition\Stats\Value::class,
            StatsEnum::Design->value => \Cybertale\Definition\Stats\Design::class,
            StatsEnum::Tag->value => \Cybertale\Definition\Stats\Tag::class,
            StatsEnum::Id->value => \Cybertale\Definition\Stats\Id::class,
            StatsEnum::ElementType->value => \Cybertale\Definition\Stats\ElementType::class,
            StatsEnum::Placeholder->value => \Cybertale\Definition\Stats\Placeholder::class,
            StatsEnum::ItemList->value => \Cybertale\Definition\Stats\ItemList::class,
            StatsEnum::Tooltip->value => \Cybertale\Definition\Stats\Tooltip::class,
            StatsEnum::Required->value => \Cybertale\Definition\Stats\Required::class,
            StatsEnum::Disabled->value => \Cybertale\Definition\Stats\Disabled::class,
            StatsEnum::AutoComplete->value => \Cybertale\Definition\Stats\AutoComplete::class,
            StatsEnum::BelongsTo->value => \Cybertale\Definition\Stats\BelongsTo::class,
            StatsEnum::ErrorMessage->value => \Cybertale\Definition\Stats\ErrorMessage::class,
            StatsEnum::IsValid->value => \Cybertale\Definition\Stats\IsValid::class,
            StatsEnum::Order->value => \Cybertale\Definition\Stats\Order::class,
            StatsEnum::DependsOn->value => \Cybertale\Definition\Stats\DependsOn::class,
            StatsEnum::Name->value => \Cybertale\Definition\Stats\Name::class,
            StatsEnum::Inherit->value => \Cybertale\Definition\Stats\Inherit::class,
            StatsEnum::BreakLine->value => \Cybertale\Definition\Stats\BreakLine::class,
            StatsEnum::ValueIndices->value => \Cybertale\Definition\Stats\ValueIndices::class,
            StatsEnum::OptionIndices->value => \Cybertale\Definition\Stats\OptionIndices::class,
            StatsEnum::Option->value => \Cybertale\Definition\Stats\Option::class,
        ];
    }
}
