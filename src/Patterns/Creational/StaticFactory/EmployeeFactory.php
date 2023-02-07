<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\StaticFactory;

use InvalidArgumentException;
use Twent\DesignPatterns\Creational\FactoryMethod\EmployeeContract;

final class EmployeeFactory
{
    /**
     * @throws InvalidArgumentException
     */
    public static function make(string $employeeType): EmployeeContract
    {
        $employeeType = EmployeeType::tryFrom($employeeType);

        if (!$employeeType) {
            throw new InvalidArgumentException('Invalid employee type!');
        }

        $ClassName = 'Twent\\DesignPatterns\\Creational\\FactoryMethod\\' . $employeeType->name;

        return new $ClassName();
    }
}
