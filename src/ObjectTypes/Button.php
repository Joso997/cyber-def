<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class Button extends ObjectTypeAbstract
{
    public function __construct (string $label, string $tag, string $design, string $id = null) {
        $this->setStats(StatsEnum::Label, $label)
            ->setStats(StatsEnum::Design, $design)
            ->setStats(StatsEnum::Tag, $tag)
            ->setStats(StatsEnum::Id, $id);
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::Button, SubObjectsEnum::Middle, ActionsEnum::None, $this->stats);
    }
}
