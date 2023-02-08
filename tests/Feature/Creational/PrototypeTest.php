<?php

declare(strict_types=1);

namespace Tests\Feature\Creational;

use Tests\TestCase;
use Twent\DesignPatterns\Creational\Prototype\Designer;
use Twent\DesignPatterns\Creational\Prototype\WebDeveloper;
use Twent\DesignPatterns\Creational\StaticFactory\EmployeeType;

final class PrototypeTest extends TestCase
{
    public function testPrototypeIsWorking()
    {
        $designer = Designer::make();
        $webDeveloper = WebDeveloper::make();

        for ($i = 0; $i < 10; $i++) {
            $designerClone = clone $designer;
            $firstName = 'Firstname ' . $i;
            $type = EmployeeType::WebDeveloper;

            $this->assertInstanceOf(Designer::class, $designerClone);
            $this->assertSame(EmployeeType::Designer->name, $designerClone->getType());

            $designerClone
                ->setFirstName('Firstname ' . $i)
                ->setType($type);

            $this->assertSame($firstName, $designerClone->getFirstName());
            $this->assertSame($type->name, $designerClone->getType());
        }

        for ($i = 0; $i < 5; $i++) {
            $webDeveloperClone = clone $webDeveloper;
            $firstName = 'Firstname ' . $i;
            $type = EmployeeType::Designer;

            $this->assertInstanceOf(WebDeveloper::class, $webDeveloperClone);
            $this->assertSame(EmployeeType::WebDeveloper->name, $webDeveloperClone->getType());

            $webDeveloperClone
                ->setFirstName($firstName)
                ->setType($type);

            $this->assertSame($firstName, $webDeveloperClone->getFirstName());
            $this->assertSame($type->name, $webDeveloperClone->getType());
        }
    }
}
