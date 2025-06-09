<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class ColumnGroup extends ObjectTypeAbstract
{
    protected array $statParamMapping = [
        'label' => StatsEnum::Label,
        'tag' => StatsEnum::Tag,
        'id' => StatsEnum::Id,
        'design' => StatsEnum::Design,
        'value' => StatsEnum::Value,
    ];

    public function __construct (string $label, string $tag, string $id = null, string $design = '', string $value = null) {
        $this->_initializeStats(get_defined_vars());
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::TableColumn, ObjectsEnum::ColumnButton, SubObjectsEnum::ParentObject, ActionsEnum::None, $this->stats);
    }
}
