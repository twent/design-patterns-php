<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Decorator;

final class SingleRoom implements Booking
{
    public function __construct(
        protected int $price = 200,
        protected string $description = 'Single room',
    ) {
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
