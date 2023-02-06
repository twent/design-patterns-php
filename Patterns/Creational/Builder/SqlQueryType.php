<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Builder;

use StringBackedEnum;
use Twent\DesignPatterns\Utils\Traits\EnumToArray;

enum SqlQueryType: string
{
    use EnumToArray;

    case Select = 'select';
    case Update = 'update';
    case Delete = 'delete';
}
