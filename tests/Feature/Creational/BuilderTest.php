<?php

declare(strict_types=1);

namespace Tests\Feature\Creational;

use Tests\TestCase;
use Twent\DesignPatterns\Creational\Builder\MysqlQueryBuilder;
use Twent\DesignPatterns\Creational\Builder\PostgresQueryBuilder;
use Twent\DesignPatterns\Creational\Builder\Users;

final class BuilderTest extends TestCase
{
    public function testBuilderIsWorking()
    {
        $mysqlBuilder = MysqlQueryBuilder::make();
        $postgresBuilder = PostgresQueryBuilder::make();

        $this->assertInstanceOf(MysqlQueryBuilder::class, $mysqlBuilder);
        $this->assertInstanceOf(PostgresQueryBuilder::class, $postgresBuilder);

        $this->assertStringNotContainsString("OFFSET", Users::getOldest($mysqlBuilder));
        $this->assertStringContainsString("OFFSET", Users::getOldest($postgresBuilder));
    }
}
