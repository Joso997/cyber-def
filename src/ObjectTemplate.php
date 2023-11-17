<?php

namespace Cybertale\Definition;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTypes\ObjectTypeAbstract;
use Cybertale\Definition\Stats\StatAbstract;

class ObjectTemplate
{
    protected RegionsEnum $region;
    protected ObjectsEnum $objectType;
    protected SubObjectsEnum $subObjectType;
    protected ActionsEnum $action;

    /**
     * @var array<int, StatAbstract>
     */
    protected array $stats;

    public function setRegion(RegionsEnum $region): ObjectTemplate
    {
        $this->region = $region;
        return $this;
    }

    public function setObjectType(ObjectsEnum $objectType): ObjectTemplate
    {
        $this->objectType = $objectType;
        return $this;
    }

    public function setSubObjectType(SubObjectsEnum $subObjectType): ObjectTemplate
    {
        $this->subObjectType = $subObjectType;
        return $this;
    }

    public function setAction(ActionsEnum $action): ObjectTemplate
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @param array<int, StatAbstract> $stats
     * @return $this
     */
    public function setStats(array $stats): ObjectTemplate
    {
        $this->stats = $stats;
        return $this;
    }

    /**
     * @param RegionsEnum $region
     * @param ObjectsEnum $objectType
     * @param SubObjectsEnum $subObjectType
     * @param ActionsEnum $action
     * @param array<int, StatAbstract> $stats
     */
    public function __construct(RegionsEnum $region, ObjectsEnum $objectType, SubObjectsEnum $subObjectType, ActionsEnum $action, array $stats){
        $this->region = $region;
        $this->objectType = $objectType;
        $this->subObjectType = $subObjectType;
        $this->action = $action;
        $this->stats = $stats;
    }

}
