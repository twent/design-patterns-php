<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Composite;

use Twent\DesignPatterns\Utils\Traits\EnumToArray;

enum ButtonType: string
{
    use EnumToArray;

    case Button = 'button';
    case Reset = 'reset';
    case Submit = 'submit';
}
