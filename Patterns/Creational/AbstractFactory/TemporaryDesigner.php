<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory;

final class TemporaryDesigner implements DesignerContract
{
    public function work()
    {
        echo "I'm designing as temporary employee..." . PHP_EOL;
    }
}
