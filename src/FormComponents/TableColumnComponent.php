<?php

namespace Cybertale\Definition\FormComponents;


use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\ObjectTemplate;

class TableColumnComponent extends ComponentAbstract
{
    public function __construct(ObjectTemplate $objectTemplate)
    {
        $objectTemplate->setRegion(RegionsEnum::TableColumn);
        parent::__construct($objectTemplate);
    }
}
