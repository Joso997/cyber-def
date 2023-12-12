<?php

namespace Cybertale\Definition\FormComponents;


use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\ObjectTemplate;

class FormComponent extends ComponentAbstract
{
    public function __construct(ObjectTemplate $objectTemplate)
    {
        $objectTemplate->setRegion(RegionsEnum::Form);
        parent::__construct($objectTemplate);
    }
}
