<?php

namespace Cybertale\Definition\Tests\ObjectTypes;

use PHPUnit\Framework\TestCase;
use Cybertale\Definition\ObjectTypes\Button;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Stats\StatAbstract;

class ButtonTest extends TestCase
{
    public function testButtonConstructorSetsStats(): void
    {
        $button = new Button(label: 'Test Button', tag: 'btn_test', design: 'primary', id: 'test_id');
        $template = $button->get();
        $stats = $template->getStats();

        $this->assertArrayHasKey(StatsEnum::Label->value, $stats);
        $this->assertSame('Test Button', $stats[StatsEnum::Label->value]->getData());

        $this->assertArrayHasKey(StatsEnum::Tag->value, $stats);
        $this->assertSame('btn_test', $stats[StatsEnum::Tag->value]->getData());

        $this->assertArrayHasKey(StatsEnum::Design->value, $stats);
        $this->assertSame('primary', $stats[StatsEnum::Design->value]->getData());

        $this->assertArrayHasKey(StatsEnum::Id->value, $stats);
        $this->assertSame('test_id', $stats[StatsEnum::Id->value]->getData());
    }
}
