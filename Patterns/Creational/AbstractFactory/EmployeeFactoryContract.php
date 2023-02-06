<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory;

interface EmployeeFactoryContract
{
    public static function makeWebDeveloper(): WebDeveloperContract;
    public static function makeDesigner(): DesignerContract;
}
