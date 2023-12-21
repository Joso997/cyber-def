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
        $inherits = [StatsEnum::Inherit->value =>
            StatType::getCaseFunctionMapping()[StatsEnum::Inherit->value]
                ->setData(json_encode([StatsEnum::Value->value, StatsEnum::ErrorMessage->value, StatsEnum::IsValid->value]))
        ];
        foreach ($objectTemplates as $objectTemplate) {
            $objectTemplate->setRegion(RegionsEnum::Form)
                ->setStats(array_merge($objectTemplate->getStats(),$inherits));
            $arr[] = $objectTemplate;
        }
        $objectTemplates = $arr;
        parent::__construct($objectTemplates);
    }
}
