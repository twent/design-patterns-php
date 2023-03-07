<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\FluentInterface;

use Stringable;

final class SqlQuery implements Stringable
{
    private array $fields = [];
    private array $from = [];
    private array $where = [];

    public function select(string ...$fields): self
    {
        foreach ($fields as $field) {
            $this->fields[] = $field;
        }

        return $this;
    }

    public function from(string $table, ?string $alias = null): self
    {
        if ($alias) {
            $this->from[] = "{$table} AS {$alias}";
        } else {
            $this->from[] = $table;
        }

        return $this;
    }

    public function where(string $condition): self
    {
        $this->where[] = $condition;

        return $this;
    }

    public function __toString(): string
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }
}
