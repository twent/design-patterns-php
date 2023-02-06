<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\FactoryMethod;

interface EmployeeFactoryContract
{
    public static function make(): EmployeeContract;
}
