<?php

namespace Cybertale\Definition\Stats;

abstract class StatAbstract
{
    protected string|bool|null $data;

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(null|bool|string $data): StatAbstract
    {
        $this->data = $data;
        return $this;
    }

    public function createStat(): StatAbstract {
        return new (get_class($this))();
    }
}
