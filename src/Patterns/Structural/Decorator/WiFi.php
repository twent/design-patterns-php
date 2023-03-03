<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Decorator;

final class WiFi extends BookingDecorator
{
    public function __construct(
        protected Booking $booking,
        protected int $price = 50,
        protected string $description = 'with Wi-Fi'
    ) {
        parent::__construct($booking, $price, $description);
    }
}
