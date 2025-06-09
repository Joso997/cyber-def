<?php

namespace Cybertale\Definition\Tests\ObjectTypes;

use PHPUnit\Framework\TestCase;
use Cybertale\Definition\ObjectTypes\DataList;
use Cybertale\Definition\Helpers\StatsEnum;
use Cybertale\Definition\Stats\StatAbstract; // For type hinting if needed

class DataListTest extends TestCase
{
    public function testDataListStoresItemListAsArray(): void
    {
        $items = ['item1', 'item2', 'option' => 'value'];
        $dataList = new DataList(tag: 'my_datalist', itemList: $items);

        $template = $dataList->get();
        $stats = $template->getStats();

        $this->assertArrayHasKey(StatsEnum::ItemList->value, $stats);
        $itemListStat = $stats[StatsEnum::ItemList->value];
        $this->assertInstanceOf(StatAbstract::class, $itemListStat);
        $this->assertSame($items, $itemListStat->getData());
    }
}
