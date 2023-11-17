<?php

namespace Cybertale\Definition\FormComponents;


use Cybertale\Definition\ObjectTemplate;

class CyberComponent
{
    private readonly ObjectTemplate $objectTemplate;

    public function __construct(ObjectTemplate $objectTemplate)
    {
        $this->objectTemplate = $objectTemplate;
    }

    protected function setStats(): array
    {
        // TODO: Implement setStats() method.
    }
}
