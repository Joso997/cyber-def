<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

class ButtonWithDataComponent extends FormComponentAbstract
{
    public function __construct(string $label, string $tag, string $design, array $itemList){
        $this->design = $design;
        $this->itemList = $itemList;
        parent::__construct($label, $tag,RegionsEnum::Form, ObjectsEnum::Button,  SubObjectsEnum::Middle, ActionsEnum::Click);
    }

    protected function setStats() : array{
        $response = [
            StatsEnum::Label->value =>["Data" => $this->label],
            StatsEnum::Value->value => ["Data" => $this->value],
            StatsEnum::Design->value =>["Data" => $this->design],
            StatsEnum::Tag->value =>["Data" => $this->tag],
            StatsEnum::Tooltip->value =>["Data" => $this->tooltip],
            StatsEnum::Id->value => ($this->id !== ''? ["Data" => $this->id]:["Data" => null]),
            StatsEnum::ItemList->value =>["Data" => json_encode($this->itemList)]
        ];
        if($this->belongTo !== "")
            $response[StatsEnum::BelongsTo->value] = ["Data" => $this->belongTo];
        if($this->errorMessage !== "")
            $response[StatsEnum::ErrorMessage->value] = ["Data" => $this->errorMessage];
        return $response;
    }
}
