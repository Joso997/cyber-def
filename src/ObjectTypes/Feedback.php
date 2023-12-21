<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\Form\ElementTypeEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class Feedback extends ObjectTypeAbstract
{
    public function __construct (string $tag, string $errorMessage = null, string $valid = null, string $design = '') {
        $this->setStats(StatsEnum::Tag, $tag)
            ->setStats(StatsEnum::Design, $design)
            ->setStats(StatsEnum::ElementType, ElementTypeEnum::hidden->value)
            ->setStats(StatsEnum::ErrorMessage, $errorMessage)
            ->setStats(StatsEnum::IsValid, $valid);
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::Field, SubObjectsEnum::ParentObject, ActionsEnum::None, $this->stats);
    }
}
