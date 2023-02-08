<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Prototype;

use Twent\DesignPatterns\Creational\StaticFactory\EmployeeType;
use Twent\DesignPatterns\Utils\Traits\Makeable;

abstract class Employee
{
    use Makeable;

    protected string $firstName;
    protected EmployeeType $type;

    abstract public function __clone();

    final public function getFirstName(): string
    {
        return $this->firstName;
    }

    final public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    final public function getType(): string
    {
        return $this->type->name;
    }

    final public function setType(EmployeeType $type): self
    {
        $this->type = $type;
        return $this;
    }
}
