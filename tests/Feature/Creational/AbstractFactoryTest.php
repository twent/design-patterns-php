<?php

declare(strict_types=1);

namespace Tests\Feature\Creational;

use Tests\TestCase;
use Twent\DesignPatterns\Creational\AbstractFactory\FulltimeEmployeeFactory;
use Twent\DesignPatterns\Creational\AbstractFactory\FulltimeWebDeveloper;
use Twent\DesignPatterns\Creational\AbstractFactory\TemporaryDesigner;
use Twent\DesignPatterns\Creational\AbstractFactory\TemporaryEmployeeFactory;

final class AbstractFactoryTest extends TestCase
{
    public function testAbstractFactoryIsWorking()
    {
        $webDeveloper = FulltimeEmployeeFactory::makeWebDeveloper();
        $designer = TemporaryEmployeeFactory::makeDesigner();

        $this->assertInstanceOf(FulltimeWebDeveloper::class, $webDeveloper);
        $this->assertInstanceOf(TemporaryDesigner::class, $designer);

        $this->assertTrue(method_exists($webDeveloper, 'work'));
        $this->assertTrue(method_exists($designer, 'work'));

        $this->assertStringContainsString("designing as temporary", $designer->work());
        $this->assertStringContainsString("developing as fulltime", $webDeveloper->work());
    }
}
