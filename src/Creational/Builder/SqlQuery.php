<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Creational\Builder;

final class SqlQuery
{
    private ?string $base = null;
    private ?SqlQueryType $type = null;
    private ?array $where = [];
    private ?string $limit = null;

    public function getBase(): ?string
    {
        return $this->base;
    }

    public function setBase(string $base): void
    {
        $this->base = $base;
    }

    public function getType(): ?string
    {
        return $this->type->value;
    }

    public function setType(SqlQueryType $type): void
    {
        $this->type = $type;
    }

    public function getWhere(): ?array
    {
        return $this->where;
    }

    public function setWhere(string $where): void
    {
        $this->where[] = $where;
    }

    public function getLimit(): ?string
    {
        return $this->limit;
    }

    public function setLimit(string $limit): void
    {
        $this->limit = $limit;
    }
}
