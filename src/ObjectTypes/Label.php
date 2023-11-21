<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class Label extends ObjectTypeAbstract
{
    public function __construct (string $label, string $tag, string $design) {
        $this->setStats(StatsEnum::Label, $label)
            ->setStats(StatsEnum::Tag, $tag)
            ->setStats(StatsEnum::Design, $design);
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::Label, SubObjectsEnum::ParentObject, ActionsEnum::None, $this->stats);
    }
}
