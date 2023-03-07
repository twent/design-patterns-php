<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\DataMapper;

final class UserDto
{
    public function __construct(
        public readonly string $username,
        public readonly string $email,
        public readonly ?int $age
    ) {
    }
}
