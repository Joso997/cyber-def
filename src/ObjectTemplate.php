<?php

namespace Cybertale\Definition;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

class ObjectTemplate
{
    public RegionsEnum $Region;
    public ObjectsEnum $ObjectEnum;
    public SubObjectsEnum $SubObjectEnum;
    public ActionsEnum $ActionEnum;
    public array $Stats;

    public function __construct(RegionsEnum $region, ObjectsEnum $objectEnum, SubObjectsEnum $subObjectEnum, ActionsEnum $actionEnum, array $stats){
        $this->Region = $region;
        $this->ObjectEnum = $objectEnum;
        $this->SubObjectEnum = $subObjectEnum;
        $this->ActionEnum = $actionEnum;
        $this->Stats = $stats;
    }

}
