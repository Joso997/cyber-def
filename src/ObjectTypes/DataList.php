<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

class DataList extends ObjectTypeAbstract
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
        // For now, the _initializeStats will pass the array, and setStats will likely cause a type issue
        // if strict_types=1 is on and PHP tries to coerce array to string/bool/null for ItemList stat.
        // However, the original code also called setStats with json_encode($itemList), so the final
        // data being passed to (new ItemList)->setData() was a string.
        // The current setStats in ObjectTypeAbstract will call (new ItemList)->setData($itemListArray)
        // This specific issue will be resolved in Task 3.
        $this->_initializeStats(get_defined_vars());
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::DataList, SubObjectsEnum::ParentObject, ActionsEnum::Insert, $this->stats);
    }
}
