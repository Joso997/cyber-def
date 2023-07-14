<?php

namespace Cybertale\Definition\FormComponents;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;

abstract class FormComponentAbstract extends ComponentAbstract
{
    protected bool $required = false;
    protected bool $disabled = false;
    protected string $autocomplete = '';
    protected RegionsEnum $region;
    protected ObjectsEnum $objectType;
    protected SubObjectsEnum $subObjectType;
    protected ActionsEnum $action;

    public function __construct(string $label, string $tag, RegionsEnum $region, ObjectsEnum $objectType, SubObjectsEnum $subObjectType, ActionsEnum $action){
        parent::__construct($label, $tag, $region, $objectType, $subObjectType, $action);
    }

    public function setValue($value): static
    {
        $this->value = $value;
        return $this;
    }

    public function setFormAttributes(bool $required = false, bool $disabled = false, string $autocomplete = ""): static
    {
        $this->required = $required;
        $this->disabled = $disabled;
        $this->autocomplete = $autocomplete;
        return $this;
    }

    public function setErrorMessage(string $errorMessage): static
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
}
