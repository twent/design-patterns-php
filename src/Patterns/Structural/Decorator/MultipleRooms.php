<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Decorator;

final class MultipleRooms implements Booking
{
    public function __construct(
        protected int $price = 200,
        protected int $count = 2,
        protected string $description = 'Two rooms',
    ) {
    }

    public function getPrice(): int
    {
        return $this->price * $this->count;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
