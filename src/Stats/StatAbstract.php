<?php

namespace Cybertale\Definition\Stats;

abstract class StatAbstract
{
    /**
     * @var mixed Can be string, bool, int, float, array, null etc.
     */
    protected mixed $data;

    /**
     * Retrieves the data held by this stat.
     *
     * @return mixed The data, which can be of various types (string, boolean, integer, array, null).
     */
    public function getData(): mixed
    {
        return $this->data;
    }

    /**
     * Sets the data for this statistical property.
     *
     * @param mixed $data The data to be stored (e.g., string, boolean, integer, array, null).
     * @return static Returns the instance of this Stat for fluent chaining.
     */
    public function setData(mixed $data): static
    {
        $this->data = $data;
        return $this;
    }

    public function createStat(): StatAbstract {
        return new (get_class($this))();
    }
}
