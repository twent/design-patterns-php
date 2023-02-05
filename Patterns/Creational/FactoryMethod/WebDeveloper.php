<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\FactoryMethod;

final class WebDeveloper implements EmployeeContract
{
    public function work()
    {
        print "I'm building a new API..." . PHP_EOL;
    }
}