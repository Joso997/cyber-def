<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\ObjectTemplate;
use Cybertale\Definition\Stats\StatAbstract;
use Cybertale\Definition\Stats\StatType;

abstract class ObjectTypeAbstract
{
    protected array $stats = [];
    public abstract function get(): ObjectTemplate;

    public function setStats(StatsEnum $statsEnum, string|bool|null $data): ObjectTypeAbstract
    {
        $newStat = StatType::getCaseFunctionMapping()[$statsEnum->value]->setData($data);

        if (isset($this->stats[$statsEnum->value])) {
            // copy existing metadata into new object
            $newStat->setMetaData($this->stats[$statsEnum->value]->getMetaData());
        }

        $this->stats[$statsEnum->value] = $newStat;

        return $this;
    }

    public function setStatsMeta(StatsEnum $statsEnum, string|bool|null $meta): ObjectTypeAbstract
    {
        $newStat = StatType::getCaseFunctionMapping()[$statsEnum->value]->setMetaData($meta);

        if (isset($this->stats[$statsEnum->value])) {
            // copy existing data into new object
            $newStat->setData($this->stats[$statsEnum->value]->getData());
        }

        $this->stats[$statsEnum->value] = $newStat;

        return $this;
    }
}

