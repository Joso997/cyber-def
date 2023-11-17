<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

class FieldViewListComponent extends FormComponentAbstract
{
    private array $itemList = [];

    public function __construct(string $label, string $tag, string $id, array $itemList, string $value){
        $this->id = $id;
        $this->value = $value;
        $this->itemList = $itemList;
        parent::__construct($label, $tag,RegionsEnum::Table, ObjectsEnum::Field,  SubObjectsEnum::ParentObject, ActionsEnum::None);
    }

    protected function setStats() : array{
        $response = [
            StatsEnum::Label->value =>["Data" => $this->label],
            StatsEnum::Value->value => ["Data" => $this->value],
            StatsEnum::Design->value => ["Data" => $this->design],
            StatsEnum::Tag->value =>["Data" => $this->tag],
            StatsEnum::Id->value =>["Data" => $this->id],
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
