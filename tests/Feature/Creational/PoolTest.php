<?php

declare(strict_types=1);

namespace Tests\Feature\Creational;

use Tests\TestCase;
use Twent\DesignPatterns\Creational\Pool\Item;
use Twent\DesignPatterns\Creational\Pool\ItemStatus;
use Twent\DesignPatterns\Creational\Pool\Warehouse;

final class PoolTest extends TestCase
{
    public function testPoolPatternIsWorking()
    {
        $pool = Warehouse::make();
        $item = $pool->getItem();

        $this->assertNotEmpty($pool->getUnavailableItems());
        $this->assertEmpty($pool->getAvailableItems());
        $this->assertSame(ItemStatus::Unavailable->name, $item->getStatus());

        $result = $pool->releaseItem($item);
        $this->assertTrue($result);

        $this->assertNotEmpty($pool->getAvailableItems());
        $this->assertEmpty($pool->getUnavailableItems());
        $this->assertSame(ItemStatus::Available->name, $item->getStatus());

        $itemNotExistsInPool = Item::make()->setTitle('Custom Title');
        $this->assertSame('Custom Title', $itemNotExistsInPool->getTitle());
        $result2 = $pool->releaseItem($itemNotExistsInPool);
        $this->assertFalse($result2);
    }
}
