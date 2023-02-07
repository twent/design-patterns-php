<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\StaticFactory;

use Twent\DesignPatterns\Creational\FactoryMethod\EmployeeContract;

final class EmployeeFactory
{
    public static function make(string $employeeType): ?EmployeeContract
    {
        $ClassName = 'Twent\\DesignPatterns\\Creational\\FactoryMethod\\' . ucfirst($employeeType);

        if (class_exists($ClassName)) {
            return new $ClassName();
        }

        return null;
    }
}
