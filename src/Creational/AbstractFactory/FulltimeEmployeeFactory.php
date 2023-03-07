<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\AbstractFactory;

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
