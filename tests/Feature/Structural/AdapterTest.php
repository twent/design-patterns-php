<?php

declare(strict_types=1);

namespace Structural;

use Tests\TestCase;
use Twent\DesignPatterns\Structural\Adapter\FulltimeWebDeveloper;
use Twent\DesignPatterns\Structural\Adapter\TemporaryEmployeeAdapter;
use Twent\DesignPatterns\Structural\Adapter\TemporaryWebDeveloper;

final class AdapterTest extends TestCase
{
    public function testAdapterPatternWorks(): void
    {
        $fulltimeWebDev = new FulltimeWebDeveloper();
        $this->assertSame(64000, $fulltimeWebDev->getSalary());
        $fulltimeWebDev->setWorkingDays(21);
        $fulltimeWebDev->setWorkingDayPrice(5000);
        $this->assertSame(21, $fulltimeWebDev->getWorkingDays());
        $this->assertSame(5000, $fulltimeWebDev->getWorkingDayPrice());
        $this->assertSame(105000, $fulltimeWebDev->getSalary());

        $temporaryWebDev = new TemporaryWebDeveloper(20);
        $this->assertSame(100000, $temporaryWebDev->getSalaryByHours());
        $temporaryWebDev->setWorkingHours(21);
        $temporaryWebDev->setWorkingHourPrice(5000);
        $this->assertSame(21, $temporaryWebDev->getWorkingHours());
        $this->assertSame(5000, $temporaryWebDev->getWorkingHourPrice());
        $this->assertSame(105000, $temporaryWebDev->getSalaryByHours());

        $temporaryWebDev2 = new TemporaryWebDeveloper();
        $this->assertSame(0, $temporaryWebDev2->getWorkingHours());
        $this->assertSame(5000, $temporaryWebDev2->getWorkingHourPrice());
        $this->assertSame(0, $temporaryWebDev2->getSalaryByHours());

        // Adapter testing
        $adapter = new TemporaryEmployeeAdapter($temporaryWebDev2);
        $this->assertSame(0, $adapter->getSalary());
    }
}
