<?php

declare(strict_types=1);

namespace Patterns\Creational\Factory;

class EmployeeFactory
{
    public static function make(string $firstName): Employee
    {
        return new Employee($firstName);
    }
}
