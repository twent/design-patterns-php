<?php

declare(strict_types=1);

namespace Patterns\Creational\StaticFactory;

use Patterns\Creational\FactoryMethod\EmployeeContract;

final class EmployeeFactory
{
    public static function make(string $employeeType): ?EmployeeContract
    {
        $ClassName = 'Patterns\\Creational\\FactoryMethod\\' . ucfirst($employeeType);

        if (class_exists($ClassName)) {
            return new $ClassName();
        }

        return null;
    }
}
