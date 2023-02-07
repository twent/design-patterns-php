<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\AbstractFactory;

final class FulltimeWebDeveloper implements WebDeveloperContract
{
    public function work()
    {
        echo "I'm web developing as fulltime employee..." . PHP_EOL;
    }
}
