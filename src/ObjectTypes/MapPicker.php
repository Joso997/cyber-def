<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class MapPicker extends ObjectTypeAbstract
{
    protected array $statParamMapping = [
        'label' => StatsEnum::Label,
        'tag' => StatsEnum::Tag,
        'design' => StatsEnum::Design,
        'id' => StatsEnum::Id,
        'value' => StatsEnum::Value,
    ];

    public function __construct (string $label, string $tag, string $design, string $id = null, array $value = null) {
        // TODO: value will be json_encoded in setStats, which is not ideal.
        // This will be addressed when StatAbstract::setData and ObjectTypeAbstract::setStats handle mixed types.
        $this->_initializeStats(get_defined_vars());
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::MapPicker, SubObjectsEnum::ParentObject, ActionsEnum::None, $this->stats);
    }
}
