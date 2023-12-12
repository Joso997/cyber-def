<?php

namespace Cybertale\Definition\FormComponents;


use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\ObjectTemplate;

class FormComponent extends ComponentAbstract
{
    public function __construct(ObjectTemplate ...$objectTemplates)
    {
        $arr = [];
        foreach ($objectTemplates as $objectTemplate) {
            $objectTemplate->setRegion(RegionsEnum::Form);
            $arr[] = $objectTemplate;
        }
        $objectTemplates = $arr;
        parent::__construct($objectTemplates);
    }
}
