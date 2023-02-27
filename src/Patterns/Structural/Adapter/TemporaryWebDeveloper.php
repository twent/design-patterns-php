<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Adapter;

final class TemporaryWebDeveloper implements TemporaryEmployee
{
    public function __construct(
        private int $workingHours = 0,
        private int $workingHourPrice = 5000,
    ) {
    }

    public function getWorkingHours(): int
    {
        return $this->workingHours;
    }

    public function setWorkingHours(int $workingHours): TemporaryWebDeveloper
    {
        $this->workingHours = $workingHours;
        return $this;
    }

    public function getWorkingHourPrice(): int
    {
        return $this->workingHourPrice;
    }

    public function setWorkingHourPrice(int $workingHourPrice): TemporaryWebDeveloper
    {
        $this->workingHourPrice = $workingHourPrice;
        return $this;
    }

    public function getSalaryByHours(): int
    {
        return $this->workingHourPrice * $this->workingHours;
    }
}
