<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod;

final class DesignerFactory implements EmployeeFactoryContract
{
    public static function make(): EmployeeContract
    {
        return new Designer();
    }
}
