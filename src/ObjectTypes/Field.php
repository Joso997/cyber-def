<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class Field extends ObjectTypeAbstract
{
    protected array $statParamMapping = [
        'tag' => StatsEnum::Tag,
        'id' => StatsEnum::Id,
        'design' => StatsEnum::Design,
        'value' => StatsEnum::Value,
    ];

    public function __construct (string $tag, string $id = null, string $design = '', string $value = null) {
        $this->_initializeStats(get_defined_vars());
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::Field, SubObjectsEnum::ParentObject, ActionsEnum::Insert, $this->stats);
    }
}
