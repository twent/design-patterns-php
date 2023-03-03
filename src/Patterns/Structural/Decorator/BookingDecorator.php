<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Decorator;

abstract class BookingDecorator implements Booking
{
    public function __construct(
        protected Booking $booking,
        protected int $price,
        protected string $description
    ) {
    }

    public function getPrice(): int
    {
        return $this->booking->getPrice() + $this->price;
    }

    public function getDescription(): string
    {
        return "{$this->booking->getDescription()} {$this->description}";
    }
}
