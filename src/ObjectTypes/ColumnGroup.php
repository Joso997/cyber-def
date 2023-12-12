<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class ColumnGroup extends ObjectTypeAbstract
{
    public function __construct (string $label, string $tag, string $id = null, string $design = '', string $value = null) {
        $this->setStats(StatsEnum::Label, $label)
            ->setStats(StatsEnum::Value, $value)
            ->setStats(StatsEnum::Tag, $tag)
            ->setStats(StatsEnum::Design, $design)
            ->setStats(StatsEnum::Id, $id);
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::TableColumn, ObjectsEnum::ColumnButton, SubObjectsEnum::ParentObject, ActionsEnum::None, $this->stats);
    }
}
