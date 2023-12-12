<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

abstract class ComponentAbstract
{
    /**
     * @var ObjectTemplate[]
     */
    protected array $objectTemplates;

    /**
     * @return array
     */
    public function toArray() : array{
        $arr = [];
        foreach ($this->objectTemplates as $objectTemplate){
            $arr[] = [
                "Stats" => $objectTemplate->statsToArray(),
                "Region" => $objectTemplate->getRegion(),
                "ObjectEnum" => $objectTemplate->getObjectType(),
                "SubObjectEnum" => $objectTemplate->getSubObjectType(),
                "ActionEnum" => $objectTemplate->getAction()
            ];
        }
        return $arr;
    }

    /**
     * @param ObjectTemplate[] $objectTemplates
     */
    public function __construct(array $objectTemplates)
    {
        $this->objectTemplates = $objectTemplates;
    }

    /**
     * @param RegionsEnum $region
     * @return $this
     */
    public function changeDefaultRegion(RegionsEnum $region): ComponentAbstract
    {
        $arr = [];
        foreach ($this->objectTemplates as $objectTemplate){
            $objectTemplate->setRegion($region);
        }
        $this->objectTemplates = $arr;
        return $this;
    }

    /**
     * @param ObjectsEnum $objectType
     * @return $this
     */
    public function changeDefaultObjectType(ObjectsEnum $objectType): ComponentAbstract
    {
        $arr = [];
        foreach ($this->objectTemplates as $objectTemplate){
            $objectTemplate->setObjectType($objectType);
        }
        $this->objectTemplates = $arr;
        return $this;
    }

    /**
     * @param SubObjectsEnum $subObjectType
     * @return $this
     */
    public function changeDefaultSubObjectType(SubObjectsEnum $subObjectType): ComponentAbstract
    {
        $arr = [];
        foreach ($this->objectTemplates as $objectTemplate){
            $objectTemplate->setSubObjectType($subObjectType);
        }
        $this->objectTemplates = $arr;
        return $this;
    }

    /**
     * @param ActionsEnum $actionType
     * @return $this
     */
    public function changeDefaultAction(ActionsEnum $actionType): ComponentAbstract
    {
        $arr = [];
        foreach ($this->objectTemplates as $objectTemplate){
            $objectTemplate->setAction($actionType);
        }
        $this->objectTemplates = $arr;
        return $this;
    }

    /**
     * @param RegionsEnum $region
     * @param ObjectsEnum $objectType
     * @param SubObjectsEnum $subObjectType
     * @param ActionsEnum $actionType
     * @return $this
     */
    public function changeDefaultIndicators(RegionsEnum $region, ObjectsEnum $objectType, SubObjectsEnum $subObjectType, ActionsEnum $actionType): ComponentAbstract
    {
        $arr = [];
        foreach ($this->objectTemplates as $objectTemplate) {
            $objectTemplate->setRegion($region);
            $objectTemplate->setObjectType($objectType);
            $objectTemplate->setSubObjectType($subObjectType);
            $objectTemplate->setAction($actionType);
        }
        $this->objectTemplates = $arr;
        return $this;
    }
}
