<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\AbstractFactory;

final class TemporaryWebDeveloper implements WebDeveloperContract
{
    public function work()
    {
        echo "I'm web developing as temporary employee..." . PHP_EOL;
    }
}
