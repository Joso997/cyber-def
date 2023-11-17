<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;

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
    protected string $dependsOn = "";
    protected RegionsEnum $region;
    protected ObjectsEnum $objectType;
    protected SubObjectsEnum $subObjectType;
    protected ActionsEnum $action;
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

    public function get() : array{
        return [
            "Stats" => $this->setStats(),
            "Region" => $this->region,
            "ObjectEnum" => $this->objectType,
            "SubObjectEnum" => $this->subObjectType,
            "ActionEnum" => $this->action
        ];
    }

    public function getAsObjectTemplate() : ObjectTemplate {
        return new ObjectTemplate($this->region, $this->objectType, $this->subObjectType, $this->action, $this->setStats());
    }

    public function setLabel(string $label): ComponentAbstract
    {
        $this->label = $label;
        return $this;
    }

    public function setTag(string $tag): ComponentAbstract
    {
        $this->tag = $tag;
        return $this;
    }

    public function setValue(?string $value): ComponentAbstract
    {
        $this->value = $value;
        return $this;
    }

    public function setDesign(string $design): ComponentAbstract
    {
        $this->design = $design;
        return $this;
    }

    public function setPlaceholder(string $placeholder): ComponentAbstract
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function setTooltip(string $tooltip): ComponentAbstract
    {
        $this->tooltip = $tooltip;
        return $this;
    }

    public function setId(string $id): ComponentAbstract
    {
        $this->id = $id;
        return $this;
    }

    public function setBelongTo(string $belongTo): ComponentAbstract
    {
        $this->belongTo = $belongTo;
        return $this;
    }

    public function setErrorMessage(string $errorMessage): ComponentAbstract
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    public function setOrder(string $order): ComponentAbstract
    {
        $this->order = $order;
        return $this;
    }

    public function setDependsOn(string $dependsOn): ComponentAbstract
    {
        $this->dependsOn = $dependsOn;
        return $this;
    }
}
