<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory;

final class FulltimeEmployeeFactory implements EmployeeFactoryContract
{
    public static function makeWebDeveloper(): WebDeveloperContract
    {
        return new FulltimeWebDeveloper();
    }

    public static function makeDesigner(): DesignerContract
    {
        return new FulltimeDesigner();
    }
}
