<?php

namespace Cybertale\Definition\FormComponents;


use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\ObjectTemplate;

class TableColumnComponent extends ComponentAbstract
{
    public function __construct(ObjectTemplate ...$objectTemplates)
    {
        $arr = [];
        foreach ($objectTemplates as $objectTemplate) {
            $objectTemplate->setRegion(RegionsEnum::TableColumn);
            $arr[] = $objectTemplate;
        }
        $objectTemplates = $arr;
        parent::__construct($objectTemplates);
    }
}
