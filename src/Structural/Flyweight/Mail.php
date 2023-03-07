<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Flyweight;

interface Mail
{
    public function render(): string;
    public function getType(): string;
}
