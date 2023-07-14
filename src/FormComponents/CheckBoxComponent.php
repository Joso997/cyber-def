<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

class CheckBoxComponent extends FormComponentAbstract
{
    private string $elementType = "";

    public function __construct(string $label, string $tag, $elementType = ""){
        $this->elementType = $elementType;
        $this->value = false;
        parent::__construct($label, $tag, RegionsEnum::Form, ObjectsEnum::CheckBox, SubObjectsEnum::ParentObject, ActionsEnum::Check);
    }

    public function setOptional(string $value = null, string $design = "", string $placeholder = "", string $tooltip = "", string $elementType = ""): static
    {
        $this->value = $value;
        $this->design = $design;
        $this->placeholder = $placeholder;
        $this->tooltip = $tooltip;
        $this->elementType = $elementType;
        return $this;
    }

    protected function setStats() : array{
        $value = $this->value?true:false;
        $response = [
            StatsEnum::Label->value =>["Data" => $this->label],
            StatsEnum::Value->value => ["Data" => $value],
            StatsEnum::Design->value =>["Data" => $this->design],
            StatsEnum::Tag->value =>["Data" => $this->tag],
            StatsEnum::ElementType->value =>["Data" => $this->elementType],
            StatsEnum::Placeholder->value =>["Data" => $this->placeholder],
            StatsEnum::Tooltip->value =>["Data" => $this->tooltip],
            StatsEnum::Id->value => ($this->id !== ''? ["Data" => $this->id]:["Data" => null]),
            StatsEnum::Order->value => ["Data" => $this->order]
        ];
        if($this->belongTo !== "")
            $response[StatsEnum::BelongsTo->value] = ["Data" => $this->belongTo];
        if($this->errorMessage !== "")
            $response[StatsEnum::ErrorMessage->value] = ["Data" => $this->errorMessage];
        return $response;
    }
}
