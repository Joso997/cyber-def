<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

abstract class ComponentAbstract
{
    protected string $label = "";
    protected string $tag = "";
    protected ?string $value = null;
    protected string $design = "";
    protected string $placeholder = "";
    protected string $tooltip = "";
    protected string $id = "";
    protected string $belongTo = "";
    protected string $errorMessage = "";
    protected string $order = "0";
    protected RegionsEnum $region;
    protected ObjectsEnum $objectType;
    protected SubObjectsEnum $subObjectType;
    protected ActionsEnum $action;

    abstract public function setOptional(string $value = null, string $design = "", string $placeholder = "", string $tooltip = ""): static;
    abstract protected function setStats() : array;

    public function __construct(string $label, string $tag, RegionsEnum $region, ObjectsEnum $objectType, SubObjectsEnum $subObjectType, ActionsEnum $action){
        $this->label = $label;
        $this->tag = $tag;
        $this->region = $region;
        $this->objectType = $objectType;
        $this->subObjectType = $subObjectType;
        $this->action = $action;
    }

    public function changeDefaultRegion(RegionsEnum $region): static
    {
        $this->region = $region;
        return $this;
    }

    public function changeDefaultObjectType(ObjectsEnum $objectType): static
    {
        $this->objectType = $objectType;
        return $this;
    }

    public function changeDefaultSubObjectType(SubObjectsEnum $subObjectType): static
    {
        $this->subObjectType = $subObjectType;
        return $this;
    }

    public function changeDefaultAction(ActionsEnum $actionType): static
    {
        $this->action = $actionType;
        return $this;
    }

    public function changeDefaultIndicators(RegionsEnum $region, ObjectsEnum $objectType, SubObjectsEnum $subObjectType, ActionsEnum $actionType): static
    {
        $this->region = $region;
        $this->objectType = $objectType;
        $this->subObjectType = $subObjectType;
        $this->action = $actionType;
        return $this;
    }

    public function withId(string $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function belongTo(string $belongTo): static
    {
        $this->belongTo = $belongTo;
        return $this;
    }

    public function order(string $orderIndex): static
    {
        $this->order = $orderIndex;
        return $this;
    }

    public function get() : array{
        return [
            "Stats" => $this->setStats(),
            "Region" => $this->region,
            "ObjectEnum" => $this->objectType,
            "SubObjectEnum" => $this->subObjectType,
            "ActionEnum" => $this->action
        ];
    }
}
