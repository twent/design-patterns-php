<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\DataMapper;

final class StorageAdapter
{
    public function __construct(
        private readonly array $rows
    ) {
    }

    private function convertToDto(array $data): UserDto
    {
        return new UserDto(
            $data['username'],
            $data['email'],
            $data['age'],
        );
    }

    public function findById(int $id): ?UserDto
    {
        if (! $this->rows[$id]) {
            return null;
        }

        return $this->convertToDto($this->rows[$id]);
    }
}
