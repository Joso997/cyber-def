<?php

namespace Cybertale\Definition\FormComponents;


use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\ObjectTemplate;
use Cybertale\Definition\Stats\StatType;

class InputGroupComponent extends ComponentAbstract
{
    public function __construct(ObjectTemplate ...$objectTemplates)
    {
        $arr = [];
        $inherits = StatType::getCaseFunctionMapping()[StatsEnum::Inherit->value]
            ->setData(json_encode([StatsEnum::Value->value, StatsEnum::ErrorMessage->value, StatsEnum::IsValid->value]));
        foreach ($objectTemplates as $objectTemplate) {
            $arr[] = $objectTemplate->setRegion(RegionsEnum::Form)
                ->appendStat(StatsEnum::Inherit, $inherits);
        }
        $objectTemplates = $arr;
        parent::__construct($objectTemplates);
    }
}
