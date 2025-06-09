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
    protected array $statParamMapping = [
        'label' => StatsEnum::Label,
        'tag' => StatsEnum::Tag,
        'id' => StatsEnum::Id,
        'value' => StatsEnum::Value,
    ];

    public function __construct (string $label, string $tag, string $id = null, string $value = null) {
        $this->_initializeStats(get_defined_vars());
    }

    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::UploadFile, SubObjectsEnum::ParentObject, ActionsEnum::Insert, $this->stats);
    }
}
