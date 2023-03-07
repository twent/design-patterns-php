<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\AbstractFactory;

final class FulltimeDesigner implements DesignerContract
{
    public function work(): string
    {
        return "I'm web designing as fulltime employee...";
    }
}
