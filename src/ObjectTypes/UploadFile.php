<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class UploadFile extends ObjectTypeAbstract
{
    public function __construct (string $label, string $tag, string $id = null, string $value = null) {
        $this->setStats(StatsEnum::Label, $label)
            ->setStats(StatsEnum::Value, $value)
            ->setStats(StatsEnum::Tag, $tag)
            ->setStats(StatsEnum::Id, $id);
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::UploadFile, SubObjectsEnum::ParentObject, ActionsEnum::Insert, $this->stats);
    }
}
