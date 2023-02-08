<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Pool;

enum ItemStatus: string
{
    case Available = 'available';
    case Unavailable = 'unavailable';
}
