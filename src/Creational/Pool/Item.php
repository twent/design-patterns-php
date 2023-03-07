<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Pool;

use Twent\DesignPatterns\Utils\Traits\Makeable;

final class Item
{
    use Makeable;

    public function __construct(
        public string $title = 'Item Title',
        public ItemStatus $status = ItemStatus::Available
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Item
    {
        $this->title = $title;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status->name;
    }

    public function setStatus(ItemStatus $status): Item
    {
        $this->status = $status;
        return $this;
    }
}
