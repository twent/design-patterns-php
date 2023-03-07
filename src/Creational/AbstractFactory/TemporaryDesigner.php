<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\AbstractFactory;

final class TemporaryDesigner implements DesignerContract
{
    public function work(): string
    {
        return "I'm designing as temporary employee...";
    }
}
