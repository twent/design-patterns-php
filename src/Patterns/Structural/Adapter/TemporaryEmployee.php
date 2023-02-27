<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Adapter;

interface TemporaryEmployee
{
    public function getSalaryByHours(): ?int;
}
