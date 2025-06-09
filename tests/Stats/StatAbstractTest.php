<?php

namespace Cybertale\Definition\Tests\Stats;

use PHPUnit\Framework\TestCase;
use Cybertale\Definition\Stats\Value; // Using a concrete class for testing abstract StatAbstract

class StatAbstractTest extends TestCase
{
    public function testSetDataAndGetDataWithMixedTypes(): void
    {
        $stat = new Value(); // Concrete, simple stat

        // Test string
        $stat->setData('hello');
        $this->assertSame('hello', $stat->getData());

        // Test boolean true
        $stat->setData(true);
        $this->assertTrue($stat->getData());

        // Test boolean false
        $stat->setData(false);
        $this->assertFalse($stat->getData());

        // Test integer
        $stat->setData(123);
        $this->assertSame(123, $stat->getData());

        // Test float
        $stat->setData(123.45);
        $this->assertSame(123.45, $stat->getData());

        // Test array
        $testArray = ['a' => 1, 'b' => 2];
        $stat->setData($testArray);
        $this->assertSame($testArray, $stat->getData());

        // Test null
        $stat->setData(null);
        $this->assertNull($stat->getData());
    }
}
