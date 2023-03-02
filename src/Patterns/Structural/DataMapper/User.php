<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\DataMapper;

final class User
{
    public function __construct(
        private string $username,
        private string $email,
        private ?int $age
    ) {
    }

    public static function fromState(UserDto $state): User
    {
        return new self(
            $state->username,
            $state->email,
            $state->age,
        );
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): User
    {
        $this->age = $age;
        return $this;
    }
}
