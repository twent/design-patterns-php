<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Composite;

use Twent\DesignPatterns\Utils\Traits\EnumToArray;

enum InputType: string
{
    use EnumToArray;

    case Text = 'text';
    case Email = 'email';
    case Tel = 'tel';
    case Password = 'password';
    case Hidden = 'hidden';
    case Date = 'date';
    case Time = 'time';
    case DateTimeLocal = 'datetime-local';
    case Month = 'month';
    case Number = 'number';
    case Search = 'search';
    case Url = 'url';
    case Image = 'image';
    case File = 'file';
}
