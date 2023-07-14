<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

class SelectButtonComponent extends FormComponentAbstract
{
    private array $itemList = [];

    public function __construct(string $label, string $tag, string $value, array $itemList){
        $this->itemList = $itemList;
        $this->value = $value;
        parent::__construct($label, $tag,RegionsEnum::Form, ObjectsEnum::SelectButton,  SubObjectsEnum::ParentObject, ActionsEnum::None);
    }

    public function setOptional(string $value = null, string $design = "", string $placeholder = "", string $tooltip = ""): static
    {
        $this->value = $value;
        $this->design = $design;
        $this->placeholder = $placeholder;
        $this->tooltip = $tooltip;
        return $this;
    }

    protected function setStats() : array{
        $response = [
            StatsEnum::Label->value =>["Data" => $this->label],
            StatsEnum::Value->value => ["Data" => $this->value],
            StatsEnum::Tag->value =>["Data" => $this->tag],
            StatsEnum::Tooltip->value =>["Data" => $this->tooltip],
            StatsEnum::Id->value => ($this->id !== ''? ["Data" => $this->id]:["Data" => null]),
            StatsEnum::ItemList->value =>["Data" => json_encode($this->itemList)]
        ];
        if($this->required)
            $response[StatsEnum::Required->value] = ["Data" => $this->required];
        if($this->disabled)
            $response[StatsEnum::Disabled->value] = ["Data" => $this->disabled];
        if($this->autocomplete !== "")
            $response[StatsEnum::AutoComplete->value] = ["Data" => $this->autocomplete];
        if($this->belongTo !== "")
            $response[StatsEnum::BelongsTo->value] = ["Data" => $this->belongTo];
        if($this->errorMessage !== "")
            $response[StatsEnum::ErrorMessage->value] = ["Data" => $this->errorMessage];
        return $response;
    }
}
