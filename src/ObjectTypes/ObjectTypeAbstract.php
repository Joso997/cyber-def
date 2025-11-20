<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\ObjectTemplate;
use Cybertale\Definition\Stats\StatAbstract;
use Cybertale\Definition\Stats\StatType;

abstract class ObjectTypeAbstract
{
    /**
     * @var array<int, StatAbstract>
     */
    protected array $stats;
    public abstract function get(): ObjectTemplate;

    public function setStats(StatsEnum $statsEnum, string|bool|null $data): ObjectTypeAbstract
    {
        $this->stats[$statsEnum->value] = StatType::getCaseFunctionMapping()[$statsEnum->value]->setData($data);
        return $this;
    }

    public function setStatsMeta(StatsEnum $statsEnum, string|bool|null $data): ObjectTypeAbstract
    {
        $this->stats[$statsEnum->value] = StatType::getCaseFunctionMapping()[$statsEnum->value]->setMetaData($data);
        return $this;
    }

}
