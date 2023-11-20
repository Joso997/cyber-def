<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class CheckBox extends ObjectTypeAbstract
{
    public function __construct (string $label, string $tag, string $design = 'form-control') {
        $this->setStats(StatsEnum::Label, $label)
            ->setStats(StatsEnum::Value, null)
            ->setStats(StatsEnum::Design, $design)
            ->setStats(StatsEnum::Tag, $tag);
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::CheckBox, SubObjectsEnum::ParentObject, ActionsEnum::Check, $this->stats);
    }
}
