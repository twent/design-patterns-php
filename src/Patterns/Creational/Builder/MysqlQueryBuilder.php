<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Builder;

use Exception;
use Twent\DesignPatterns\Utils\Traits\Makeable;

class MysqlQueryBuilder implements SqlQueryBuilder
{
    use Makeable;

    protected SqlQuery $query;

    protected function reset(): void
    {
        $this->query = new SqlQuery();
    }
    public function select(string $table, array $fields): SQLQueryBuilder
    {
        $this->reset();
        $this->query->setBase("SELECT " . implode(", ", $fields) . " FROM " . $table);
        $this->query->setType(SqlQueryType::Select);

        return $this;
    }

    /**
     * @throws Exception
     */
    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        if (!in_array($this->query->getType(), SqlQueryType::values())) {
            throw new Exception("WHERE can only be added to SELECT, UPDATE OR DELETE");
        }
        $this->query->setWhere("$field $operator '$value'");

        return $this;
    }

    /**
     * @throws Exception
     */
    public function limit(int $start, int $offset = 20): SQLQueryBuilder
    {
        if ($this->query->getType() != SqlQueryType::Select->value) {
            throw new Exception("LIMIT can only be added to SELECT");
        }
        $this->query->setLimit(" LIMIT " . $start . ", " . $offset);

        return $this;
    }

    public function getSQL(): string
    {
        return $this->__toString();
    }

    public function __toString(): string
    {
        $query = $this->query;
        $sql = $query->getBase();

        if (!empty($query->getWhere())) {
            $sql .= " WHERE " . implode(' AND ', $query->getWhere());
        }

        if ($query->getLimit()) {
            $sql .= $query->getLimit();
        }

        $sql .= ";" . PHP_EOL;

        return $sql;
    }
}
