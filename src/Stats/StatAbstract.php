<?php

namespace Cybertale\Definition\Stats;

use Cybertale\Definition\Helpers\StatsEnum;

abstract class StatAbstract
{
    protected string|null $data = null;

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): StatAbstract
    {
        $this->data = $data;
        return $this;
    }

    public function createStat(): StatAbstract {
        return new (get_class($this))();
    }
}
