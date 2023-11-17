<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

class DataListComponent extends FormComponentAbstract
{

    public function __construct(string $label, string $tag, array $itemList){
        $this->itemList = $itemList;
        parent::__construct($label, $tag, RegionsEnum::Form, ObjectsEnum::DataList, SubObjectsEnum::ParentObject, ActionsEnum::Insert);
    }

    protected function setStats() : array{
        $response = [
            StatsEnum::Label->value =>["Data" => $this->label],
            StatsEnum::Value->value => ["Data" => $this->value],
            StatsEnum::Design->value =>["Data" => $this->design],
            StatsEnum::Tag->value =>["Data" => $this->tag],
            StatsEnum::Placeholder->value =>["Data" => $this->placeholder],
            StatsEnum::Tooltip->value =>["Data" => $this->tooltip],
            StatsEnum::ItemList->value =>["Data" => json_encode($this->itemList)],
            StatsEnum::Id->value => ($this->id !== ''? ["Data" => $this->id]:["Data" => null])
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
