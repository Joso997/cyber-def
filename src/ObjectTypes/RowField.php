<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class RowField extends ObjectTypeAbstract
{
    public function __construct (string $label, string $tag, string $design, string $id = null, string $value = null) {
        $this->setStats(StatsEnum::Label, $label)
            ->setStats(StatsEnum::Value, $value)
            ->setStats(StatsEnum::Tag, $tag)
            ->setStats(StatsEnum::Design, $design)
            ->setStats(StatsEnum::Id, $id);
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Table, ObjectsEnum::Field, SubObjectsEnum::ParentObject, ActionsEnum::None, $this->stats);
    }
}
