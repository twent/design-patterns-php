<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Builder;

final class Users
{
    public static function getOldest(SqlQueryBuilder $queryBuilder): void
    {
        echo $queryBuilder
            ->select('users', ['id', 'login', 'email', 'birth_date'])
            ->where('id', '5', '<')
            ->limit(5)
            ->getSQL();
    }
}
