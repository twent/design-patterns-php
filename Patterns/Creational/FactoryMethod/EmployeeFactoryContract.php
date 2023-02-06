<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod;

interface EmployeeFactoryContract
{
    public static function make(): EmployeeContract;
}
