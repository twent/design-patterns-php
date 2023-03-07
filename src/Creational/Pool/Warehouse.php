<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Pool;

use Twent\DesignPatterns\Utils\Traits\Makeable;

final class Warehouse
{
    use Makeable;

    private array $availableItems = [];
    private array $unavailableItems = [];

    public function getAvailableItems(): array
    {
        return $this->availableItems;
    }

    public function getUnavailableItems(): array
    {
        return $this->unavailableItems;
    }

    public function getItem(): Item
    {
        if (empty($this->availableItems)) {
            $item = Item::make();
        } else {
            $item = array_pop($this->availableItems);
        }

        $this->unavailableItems[spl_object_hash($item)] = $item;
        $item->setStatus(ItemStatus::Unavailable);

        return $item;
    }

    public function releaseItem(Item $item): bool
    {
        $hashKey = spl_object_hash($item);

        if (!$this->unavailableItems[$hashKey]) {
            return false;
        }

        unset($this->unavailableItems[$hashKey]);
        $this->availableItems[$hashKey] = $item;
        $item->setStatus(ItemStatus::Available);

        return true;
    }
}
