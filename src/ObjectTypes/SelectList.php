<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class SelectList extends ObjectTypeAbstract
{
    protected array $statParamMapping = [
        'tag' => StatsEnum::Tag,
        'itemList' => StatsEnum::ItemList,
        'id' => StatsEnum::Id,
        'value' => StatsEnum::Value,
    ];

    public function __construct (string $tag, array $itemList, string $id = null, string $value = null) {
        // TODO: itemList will be json_encoded in setStats, which is not ideal.
        // This will be addressed when StatAbstract::setData and ObjectTypeAbstract::setStats handle mixed types.
        $this->_initializeStats(get_defined_vars());
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::SelectList, SubObjectsEnum::ParentObject, ActionsEnum::Insert, $this->stats);
    }
}
