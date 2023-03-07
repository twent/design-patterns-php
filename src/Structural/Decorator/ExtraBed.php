<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Decorator;

final class ExtraBed extends BookingDecorator
{
    public function __construct(
        protected Booking $booking,
        protected int $price = 200,
        protected string $description = 'with extra bed'
    ) {
        parent::__construct($booking, $price, $description);
    }
}
