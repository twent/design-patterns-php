<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Flyweight;

enum MailType: string
{
    case Business = 'business';
    case Personal = 'personal';
}
