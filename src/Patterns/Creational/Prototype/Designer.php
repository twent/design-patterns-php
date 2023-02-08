<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Prototype;

use Twent\DesignPatterns\Creational\StaticFactory\EmployeeType;
use Twent\DesignPatterns\Utils\Traits\Makeable;

final class Designer extends Employee
{
    protected EmployeeType $type = EmployeeType::Designer;

    public function __clone()
    {
    }
}
