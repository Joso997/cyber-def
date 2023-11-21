<?php

namespace Cybertale\Definition\FormComponents;


use Cybertale\Definition\ObjectTemplate;

class CyberComponent extends ComponentAbstract
{

    public function toArray() : array{
        return [
            "Stats" => $this->objectTemplate->statsToArray(),
            "Region" => $this->objectTemplate->getRegion(),
            "ObjectEnum" => $this->objectTemplate->getObjectType(),
            "SubObjectEnum" => $this->objectTemplate->getSubObjectType(),
            "ActionEnum" => $this->objectTemplate->getAction()
        ];
    }
}
