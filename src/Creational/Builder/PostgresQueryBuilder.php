<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Builder;

final class PostgresQueryBuilder extends MysqlQueryBuilder
{
    public function limit(int $start, int $offset = 25): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->setLimit(" LIMIT " . $start . " OFFSET " . $offset);

        return $this;
    }
}
