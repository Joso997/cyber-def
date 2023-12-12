<?php

namespace Cybertale\Definition\FormComponents;


use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\ObjectTemplate;

class CyberComponent extends ComponentAbstract
{
    public function __construct(ObjectTemplate ...$objectTemplates)
    {
        parent::__construct($objectTemplates);
    }
}
