<?php

declare(strict_types=1);

namespace Tests\Feature\Creational;

use Tests\TestCase;
use Twent\DesignPatterns\Creational\Singleton\DatabaseConnection;

final class SingletonTest extends TestCase
{
    public function testSingletonIsWorking()
    {
        $dbName = 'database_name';

        $connection = DatabaseConnection::getInstance();
        $connection2 = DatabaseConnection::getInstance();

        $this->assertInstanceOf(DatabaseConnection::class, $connection);
        $this->assertInstanceOf(DatabaseConnection::class, $connection2);

        $connection->setName($dbName);

        $this->assertSame($dbName, $connection->getName());
        $this->assertSame($dbName, $connection2->getName());
    }
}
