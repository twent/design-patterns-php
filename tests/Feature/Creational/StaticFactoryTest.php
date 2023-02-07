<?php

declare(strict_types=1);

namespace Tests\Feature\Creational;

use InvalidArgumentException;
use Tests\TestCase;
use Twent\DesignPatterns\Creational\FactoryMethod\Designer;
use Twent\DesignPatterns\Creational\StaticFactory\EmployeeFactory;
use Twent\DesignPatterns\Creational\StaticFactory\EmployeeType;

final class StaticFactoryTest extends TestCase
{
    public function testStaticFactoryIsWorking()
    {
        $employeeType = EmployeeType::Designer->value;

        $designer = EmployeeFactory::make($employeeType);

        $this->assertInstanceOf(Designer::class, $designer);

        $this->assertTrue(method_exists($designer, 'work'));

        $this->assertStringContainsString("making a new design", $designer->work());
    }

    public function testStaticFactoryFailedWithWrongEmployeeType()
    {
        $employeeType = 'notExistsEmployeeType';

        $this->expectException(InvalidArgumentException::class);

        EmployeeFactory::make($employeeType);
    }
}
