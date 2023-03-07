<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\StaticFactory;

use Twent\DesignPatterns\Utils\Traits\EnumToArray;

enum EmployeeType: string
{
    use EnumToArray;

    case Designer = 'designer';
    case WebDeveloper = 'web-developer';
}
