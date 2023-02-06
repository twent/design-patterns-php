<?php

declare(strict_types=1);

namespace Patterns\Creational\Factory;

class Employee
{
    private string $firstName;

    public function __construct(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }
}
