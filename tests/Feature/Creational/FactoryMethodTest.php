<?php

declare(strict_types=1);

namespace Tests\Feature\Creational;

use Tests\TestCase;
use Twent\DesignPatterns\Creational\FactoryMethod\Designer;
use Twent\DesignPatterns\Creational\FactoryMethod\DesignerFactory;
use Twent\DesignPatterns\Creational\FactoryMethod\WebDeveloper;
use Twent\DesignPatterns\Creational\FactoryMethod\WebDeveloperFactory;

final class FactoryMethodTest extends TestCase
{
    public function testFactoryMethodIsWorking()
    {
        $webDeveloper = WebDeveloperFactory::make();
        $designer = DesignerFactory::make();

        $this->assertInstanceOf(WebDeveloper::class, $webDeveloper);
        $this->assertInstanceOf(Designer::class, $designer);

        $this->assertTrue(method_exists($webDeveloper, 'work'));
        $this->assertTrue(method_exists($designer, 'work'));

        $this->assertStringContainsString("building a new API", $webDeveloper->work());
        $this->assertStringContainsString("making a new design", $designer->work());
    }
}
