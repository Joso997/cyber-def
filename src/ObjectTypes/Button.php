<?php

namespace Cybertale\Definition\ObjectTypes;

use Cybertale\Definition\Helpers\ObjectsEnum;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\ObjectTemplate;

class Button extends ObjectTypeAbstract
{
    public function __construct (string $label, string $tag, string $design) {
        $this->setStats(StatsEnum::Label, $label)
            ->setStats(StatsEnum::Tag, $tag)
            ->setStats(StatsEnum::Design, $design);
    }
}
