<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class ColumnField extends ObjectTypeAbstract
{
    protected array $statParamMapping = [
        'label' => StatsEnum::Label,
        'tag' => StatsEnum::Tag,
        'id' => StatsEnum::Id,
        'value' => StatsEnum::Value,
        'design' => StatsEnum::Design,
    ];

    public function __construct (string $label, string $tag, string $id, string $value, string $design = '') {
        $this->_initializeStats(get_defined_vars());
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::TableColumn, ObjectsEnum::Column, SubObjectsEnum::ParentObject, ActionsEnum::None, $this->stats);
    }
}
