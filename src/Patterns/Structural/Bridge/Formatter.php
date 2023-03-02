<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Bridge;

interface Formatter
{
    public function format(string $text): string;
}
