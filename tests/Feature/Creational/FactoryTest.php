<?php

declare(strict_types=1);

namespace Tests\Feature\Creational;

use ArgumentCountError;
use Tests\TestCase;
use Twent\DesignPatterns\Creational\Factory\Employee;
use Twent\DesignPatterns\Creational\Factory\EmployeeFactory;

final class FactoryTest extends TestCase
{
    public function testFactoryIsWorking()
    {
        $employeeFirstname = 'Firstname';
        $employee = EmployeeFactory::make($employeeFirstname);

        $this->assertInstanceOf(Employee::class, $employee);

        $this->assertSame($employee->getFirstName(), $employeeFirstname);
    }

    public function testFactoryIsNotWorkingWithEmptyData()
    {
        $this->expectException(ArgumentCountError::class);

        EmployeeFactory::make();
    }
}
