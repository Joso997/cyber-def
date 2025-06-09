<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class RadioAlt extends ObjectTypeAbstract
{
    protected array $statParamMapping = [
        'tag' => StatsEnum::Tag,
        'name' => StatsEnum::Name,
        'id' => StatsEnum::Id,
        'value' => StatsEnum::Value,
    ];

    public function __construct (string $tag, string $name, string $id = null, string $value = null) {
        $this->_initializeStats(get_defined_vars());
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::Radio, SubObjectsEnum::ParentObject, ActionsEnum::Insert, $this->stats);
    }
}
