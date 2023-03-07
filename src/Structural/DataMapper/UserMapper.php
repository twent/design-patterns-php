<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\DataMapper;

use InvalidArgumentException;

final class UserMapper
{
    public function __construct(
        private readonly StorageAdapter $storageAdapter
    ) {
    }

    /**
     * @throws InvalidArgumentException
     */
    public function findById(int $id): User
    {
        $result = $this->storageAdapter->findById($id);

        if (! $result) {
            throw new InvalidArgumentException("User {$id} not found!");
        }

        return $this->getUserFromState($result);
    }

    private function getUserFromState(UserDto $result): User
    {
        return User::fromState($result);
    }
}
