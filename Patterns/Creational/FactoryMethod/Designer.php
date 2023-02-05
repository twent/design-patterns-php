<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\FactoryMethod;

final class Designer implements EmployeeContract
{
    public function work()
    {
        echo "I'm making a new design... " . PHP_EOL;
    }
}