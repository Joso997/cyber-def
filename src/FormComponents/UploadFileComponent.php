<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

class UploadFileComponent extends FormComponentAbstract
{

    public function __construct(string $label, string $tag, $elementType = ""){
        $this->elementType = $elementType;
        parent::__construct($label, $tag,RegionsEnum::Form, ObjectsEnum::UploadFile,  SubObjectsEnum::ParentObject, ActionsEnum::Insert);
    }

    protected function setStats() : array{
        $response = [
            StatsEnum::Label->value =>["Data" => $this->label],
            StatsEnum::Value->value => ["Data" => $this->value],
            StatsEnum::Design->value =>["Data" => $this->design],
            StatsEnum::Tag->value =>["Data" => $this->tag],
            StatsEnum::ElementType->value =>["Data" => $this->elementType],
            StatsEnum::Placeholder->value =>["Data" => $this->placeholder],
            StatsEnum::Tooltip->value =>["Data" => $this->tooltip],
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
