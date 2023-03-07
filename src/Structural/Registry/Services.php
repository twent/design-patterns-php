<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Registry;

use InvalidArgumentException;

abstract class Services
{
    private static array $services = [];

    final public static function set(ServiceName $key, Service $value): void
    {
        self::$services[$key->value] = $value;
    }

    /**
     * @throws InvalidArgumentException
     */
    final public static function get(ServiceName $key): Service
    {
        if (! isset(self::$services[$key->value])) {
            throw new InvalidArgumentException('Service not found in registry!');
        }

        return self::$services[$key->value];
    }
}
