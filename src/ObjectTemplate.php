<?php

namespace Cybertale\Definition;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTypes\ObjectTypeAbstract;
use Cybertale\Definition\Stats\StatAbstract;

class ObjectTemplate
{
    /**
     * @var RegionsEnum
     */
    protected RegionsEnum $region;
    /**
     * @var ObjectsEnum
     */
    protected ObjectsEnum $objectType;
    /**
     * @var SubObjectsEnum
     */
    protected SubObjectsEnum $subObjectType;
    /**
     * @var ActionsEnum
     */
    protected ActionsEnum $action;

    /**
     * @var array<int, StatAbstract>
     */
    protected array $stats;

    /**
     * @return array
     */
    public function statsToArray(): array {
        $arr = [];
        foreach ($this->stats as $key => $value){
            if ($value instanceof StatAbstract) {
                $arr[$key] = ['Data' => $value->getData()];
            }
        }
        return $arr;
    }

    /**
     * @param RegionsEnum $region
     * @return $this
     */
    public function setRegion(RegionsEnum $region): ObjectTemplate
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @param ObjectsEnum $objectType
     * @return $this
     */
    public function setObjectType(ObjectsEnum $objectType): ObjectTemplate
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * @param SubObjectsEnum $subObjectType
     * @return $this
     */
    public function setSubObjectType(SubObjectsEnum $subObjectType): ObjectTemplate
    {
        $this->subObjectType = $subObjectType;
        return $this;
    }

    /**
     * @param ActionsEnum $action
     * @return $this
     */
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
     * @param StatAbstract $stat
     * @return $this
     */
    public function appendStat(StatsEnum $statsEnum, StatAbstract $stat): ObjectTemplate
    {
        $this->stats[$statsEnum->value] = $stat;
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

    /**
     * @return StatAbstract[]
     */
    public function getStats(): array
    {
        return $this->stats;
    }

    /**
     * @return RegionsEnum
     */
    public function getRegion(): RegionsEnum
    {
        return $this->region;
    }

    /**
     * @return ObjectsEnum
     */
    public function getObjectType(): ObjectsEnum
    {
        return $this->objectType;
    }

    /**
     * @return SubObjectsEnum
     */
    public function getSubObjectType(): SubObjectsEnum
    {
        return $this->subObjectType;
    }

    /**
     * @return ActionsEnum
     */
    public function getAction(): ActionsEnum
    {
        return $this->action;
    }

}
