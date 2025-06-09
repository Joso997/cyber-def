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

    /**
     * Defines the mapping of constructor parameter names to StatsEnum values for child classes.
     * Example: ['label' => StatsEnum::Label, 'id' => StatsEnum::Id]
     * @var array<string, \Cybertale\Definition\Helpers\StatsEnum>
     */
    protected array $statParamMapping = [];

    public abstract function get(): ObjectTemplate;

    /**
     * Returns the stat parameter mapping defined by the child class.
     * Child classes can override this method or the $statParamMapping property.
     * @return array<string, \Cybertale\Definition\Helpers\StatsEnum>
     */
    protected function getStatParamMapping(): array
    {
        return $this->statParamMapping;
    }

    /**
     * Initializes the stats for the object based on the provided parameters
     * and the child class's stat mapping.
     *
     * @param array<string, mixed> $params Associative array of parameters, typically from get_defined_vars() in the child constructor.
     * @return void
     */
    protected function _initializeStats(array $params): void
    {
        foreach ($this->getStatParamMapping() as $paramName => $statsEnum) {
            // Check if the parameter exists and was provided (isset is important for optional params that might be null)
            // We also want to set the stat if the param was explicitly passed as null.
            if (array_key_exists($paramName, $params)) {
                // The setStats method can handle null values if the specific stat type allows it
                // or if null signifies "don't set this stat" (current setStats adds it with null data).
                // This behavior will be refined by Step 3 (mixed data types in StatAbstract)
                $this->setStats($statsEnum, $params[$paramName]);
            }
        }
    }

    /**
     * Sets a specific stat for the object.
     *
     * @param \Cybertale\Definition\Helpers\StatsEnum $statsEnum The enum value of the stat to set.
     * @param mixed $data The data for the stat.
     * @return static
     */
    public function setStats(\Cybertale\Definition\Helpers\StatsEnum $statsEnum, mixed $data): static
    {
        $statClass = \Cybertale\Definition\Stats\StatType::getStatClassMapping()[$statsEnum->value];
        // The following line correctly passes $data (which is now mixed)
        // to StatAbstract::setData() which now accepts mixed.
        $this->stats[$statsEnum->value] = (new $statClass())->setData($data);
        return $this;
    }

}
