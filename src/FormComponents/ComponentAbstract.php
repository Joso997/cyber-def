<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

abstract class ComponentAbstract
{
    protected readonly ObjectTemplate $objectTemplate;
    public abstract function toArray() : array;
    public function __construct(ObjectTemplate $objectTemplate)
    {
        $this->objectTemplate = $objectTemplate;
    }

    public function changeDefaultRegion(RegionsEnum $region): ComponentAbstract
    {
        $this->objectTemplate->setRegion($region);
        return $this;
    }

    public function changeDefaultObjectType(ObjectsEnum $objectType): ComponentAbstract
    {
        $this->objectTemplate->setObjectType($objectType);
        return $this;
    }

    public function changeDefaultSubObjectType(SubObjectsEnum $subObjectType): ComponentAbstract
    {
        $this->objectTemplate->setSubObjectType($subObjectType);
        return $this;
    }

    public function changeDefaultAction(ActionsEnum $actionType): ComponentAbstract
    {
        $this->objectTemplate->setAction($actionType);
        return $this;
    }

    public function changeDefaultIndicators(RegionsEnum $region, ObjectsEnum $objectType, SubObjectsEnum $subObjectType, ActionsEnum $actionType): ComponentAbstract
    {
        $this->objectTemplate->setRegion($region);
        $this->objectTemplate->setObjectType($objectType);
        $this->objectTemplate->setSubObjectType($subObjectType);
        $this->objectTemplate->setAction($actionType);
        return $this;
    }
}
