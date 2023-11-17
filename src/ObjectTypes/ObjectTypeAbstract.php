<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ActionsEnum;
use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\RegionsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Helpers\SubObjectsEnum;
use Cybertale\Definition\ObjectTemplate;
use Cybertale\Definition\Stats\Label;
use Cybertale\Definition\Stats\StatAbstract;
use Cybertale\Definition\Stats\StatType;

abstract class ObjectTypeAbstract
{
    /**
     * @var array<int, StatAbstract>
     */
    protected array $stats;
    public function get(): ObjectTemplate
    {
        return new ObjectTemplate(RegionsEnum::Form, ObjectsEnum::Button, SubObjectsEnum::Middle, ActionsEnum::None, $this->stats);
    }

    public function setStats(StatsEnum $statsEnum, string $data): ObjectTypeAbstract
    {
        $this->stats[$statsEnum->value] = StatType::getCaseFunctionMapping()[$statsEnum->value]->setData($data);
        return $this;
    }

}
