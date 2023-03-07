<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Prototype;

use Twent\DesignPatterns\Creational\StaticFactory\EmployeeType;

final class WebDeveloper extends Employee
{
    protected EmployeeType $type = EmployeeType::WebDeveloper;

    public function __clone()
    {
    }
}
