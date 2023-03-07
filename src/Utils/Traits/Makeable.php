<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Utils\Traits;

trait Makeable
{
    public static function make(mixed ...$arguments): self
    {
        return new static(...$arguments);
    }
}
