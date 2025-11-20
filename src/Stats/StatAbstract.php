<?php

namespace Cybertale\Definition\Stats;

abstract class StatAbstract
{
    protected string|bool|null $data = null;
    protected string|bool|null $metaData = null;

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
        $this->metaData = $data;
        return $this;
    }

    public function createStat(): StatAbstract {
        return new (get_class($this))();
    }
}
