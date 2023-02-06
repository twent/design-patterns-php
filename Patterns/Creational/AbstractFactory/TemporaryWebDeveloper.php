<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory;

final class TemporaryWebDeveloper implements WebDeveloperContract
{
    public function work()
    {
        echo "I'm web developing as temporary employee..." . PHP_EOL;
    }
}
