<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Decorator;

interface Booking
{
    public function getPrice(): int;
    public function getDescription(): string;
}
