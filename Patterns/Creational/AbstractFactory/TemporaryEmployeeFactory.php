<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory;

final class TemporaryEmployeeFactory implements EmployeeFactoryContract
{
    public static function makeWebDeveloper(): WebDeveloperContract
    {
        return new TemporaryWebDeveloper();
    }

    public static function makeDesigner(): DesignerContract
    {
        return new TemporaryDesigner();
    }
}
