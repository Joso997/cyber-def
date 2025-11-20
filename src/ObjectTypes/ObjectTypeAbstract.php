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
        if (!isset($this->stats[$statsEnum->value])) {
            $this->stats[$statsEnum->value] = StatType::getCaseFunctionMapping()[$statsEnum->value]->createStat();
        }

        $this->stats[$statsEnum->value]->setData($data);
        return $this;
    }

    public function setStatsMeta(StatsEnum $statsEnum, string|bool|null $data): ObjectTypeAbstract
    {
        if (!isset($this->stats[$statsEnum->value])) {
            $this->stats[$statsEnum->value] = StatType::getCaseFunctionMapping()[$statsEnum->value]->createStat();
        }

        $this->stats[$statsEnum->value]->setMetaData($data);
        return $this;
    }


}
