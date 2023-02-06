<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Builder;

interface SqlQueryBuilder
{
    public function select(string $table, array $fields): SQLQueryBuilder;

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;

    public function limit(int $start, int $offset = 20): SQLQueryBuilder;

    // + other methods...

    public function getSQL(): string;

    public function __toString(): string;
}
