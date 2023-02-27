<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Adapter;

final class TemporaryEmployeeAdapter implements FulltimeEmployee
{
    public function __construct(
        private readonly TemporaryEmployee $employee
    ) {
    }

    public function getSalary(): int
    {
        return $this->employee->getSalaryByHours();
    }
}
