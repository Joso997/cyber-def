<?php

namespace Cybertale\Definition\Stats;

abstract class StatAbstract
{
    protected string|bool|null $data;
    protected string|bool|null $metaData;

    public function getData(): string|bool|null
    {
        return $this->data;
    }

    public function getMetaData(): string|bool|null
    {
        return $this->metaData;
    }

    public function setData(null|bool|string $data): StatAbstract
    {
        $this->data = $data;
        return $this;
    }

    public function setMetaData(null|bool|string $data): StatAbstract
    {
        $this->metaData = $metaData;
        return $this;
    }

    public function createStat(): StatAbstract {
        return new (get_class($this))();
    }
}
