<?php

namespace Cybertale\Definition\FormComponents;


use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\ObjectTemplate;

class InputGroupComponent extends ComponentAbstract
{
    public function __construct(ObjectTemplate ...$objectTemplates)
    {
        $arr = [];
        foreach ($objectTemplates as $objectTemplate) {
            $objectTemplate->setRegion(RegionsEnum::Form)
                ->setStats([StatsEnum::Inherit->value => json_encode([StatsEnum::Value->value, StatsEnum::ErrorMessage->value, StatsEnum::IsValid->value])]);
            $arr[] = $objectTemplate;
        }
        $objectTemplates = $arr;
        parent::__construct($objectTemplates);
    }
}
