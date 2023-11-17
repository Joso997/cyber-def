<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

class LabelComponent extends ComponentAbstract
{
    public function __construct(string $label, string $tag, string $value, string $design){
        $this->value = $value;
        $this->design = $design;
        parent::__construct($label, $tag,RegionsEnum::Form, ObjectsEnum::Label,  SubObjectsEnum::ParentObject, ActionsEnum::None);
    }

    protected function setStats() : array{
        $response = [
            StatsEnum::Label->value =>["Data" => $this->label],
            StatsEnum::Value->value => ["Data" => $this->value],
            StatsEnum::Design->value =>["Data" => $this->design],
            StatsEnum::Tag->value =>["Data" => $this->tag]
        ];
        if($this->belongTo !== "")
            $response[StatsEnum::BelongsTo->value] = ["Data" => $this->belongTo];
        if($this->dependsOn !== "")
            $response[StatsEnum::DependsOn->value] = ["Data" => $this->dependsOn];
        return $response;
    }
}
