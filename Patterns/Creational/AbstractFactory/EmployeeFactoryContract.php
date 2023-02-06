<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\AbstractFactory;

interface EmployeeFactoryContract
{
    public static function makeWebDeveloper(): WebDeveloperContract;
    public static function makeDesigner(): DesignerContract;
}
