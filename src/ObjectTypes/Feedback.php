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
    protected array $statParamMapping = [
        'tag' => StatsEnum::Tag,
        'errorMessage' => StatsEnum::ErrorMessage,
        'valid' => StatsEnum::IsValid,
        'design' => StatsEnum::Design,
    ];

    public function __construct (string $tag, string $errorMessage = null, string $valid = null, string $design = '') {
        $this->_initializeStats(get_defined_vars());
        // ElementType is hardcoded for Feedback
        $this->setStats(StatsEnum::ElementType, ElementTypeEnum::hidden->value);
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::Field, SubObjectsEnum::ParentObject, ActionsEnum::None, $this->stats);
    }
}
