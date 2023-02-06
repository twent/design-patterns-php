<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\AbstractFactory;

final class FulltimeDesigner implements DesignerContract
{
    public function work()
    {
        echo "I'm web designing as fulltime employee..." . PHP_EOL;
    }
}
