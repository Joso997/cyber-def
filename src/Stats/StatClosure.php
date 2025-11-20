<?php

namespace Cybertale\Definition\Stats;

use Closure;

class StatClosure {
    /**
     * @var Closure():StatAbstract
     */
    private Closure $closure;

    public function __construct($closure) {
        $this->closure = $closure;
    }

    /**
     * @return StatAbstract
     */
    public function __invoke() : StatAbstract {
        return ($this->closure)();
    }

    public function setData(null|bool|string $data): StatAbstract
    {
        return ($this->closure)()->setData($data);
    }

    public function setMetaData(null|bool|string $data): StatAbstract
    {
        return ($this->closure)()->setMetaData($data);
    }
}
