<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Registry;

use Twent\DesignPatterns\Utils\Traits\EnumToArray;

enum ServiceName: string
{
    use EnumToArray;

    case Logger = 'logger';
    case Email = 'email';
}
