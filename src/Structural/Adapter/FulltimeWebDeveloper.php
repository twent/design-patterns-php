<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Adapter;

final class FulltimeWebDeveloper implements FulltimeEmployee
{
    public function __construct(
        private ?int $workingDays = 20,
        private int $workingDayPrice = 3200,
    ) {
    }

    public function getWorkingDays(): int
    {
        return $this->workingDays;
    }

    public function setWorkingDays(int $workingDays): FulltimeWebDeveloper
    {
        $this->workingDays = $workingDays;
        return $this;
    }

    public function getWorkingDayPrice(): int
    {
        return $this->workingDayPrice;
    }

    public function setWorkingDayPrice(int $workingDayPrice): FulltimeWebDeveloper
    {
        $this->workingDayPrice = $workingDayPrice;
        return $this;
    }

    public function getSalary(): int
    {
        return $this->workingDays * $this->workingDayPrice;
    }
}
