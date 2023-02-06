<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\AbstractFactory;

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
