<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Singleton;

final class DatabaseConnection
{
    private static ?self $instance = null;
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public static function getInstance(): ?self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __clone(): void
    {
        //
    }

    public function __wakeup(): void
    {
        //
    }
}
