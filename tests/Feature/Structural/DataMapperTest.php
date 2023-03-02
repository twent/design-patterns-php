<?php

declare(strict_types=1);

namespace Structural;

use InvalidArgumentException;
use Tests\TestCase;
use Twent\DesignPatterns\Structural\DataMapper\StorageAdapter;
use Twent\DesignPatterns\Structural\DataMapper\User;
use Twent\DesignPatterns\Structural\DataMapper\UserMapper;

final class DataMapperTest extends TestCase
{
    public function testDataMapperWorks(): void
    {
        $storage = new StorageAdapter([1 => [
            'username' => 'user',
            'email' => 'test@test.ru',
            'age' => 20
        ]]);

        $dataMapper = new UserMapper($storage);

        $user = $dataMapper->findById(1);

        $this->assertInstanceOf(User::class, $user);

        $this->assertSame('user', $user->getUsername());
        $user->setUsername('username');
        $this->assertSame('username', $user->getUsername());

        $this->assertSame('test@test.ru', $user->getEmail());
        $user->setEmail('test2@test.ru');
        $this->assertSame('test2@test.ru', $user->getEmail());

        $this->assertSame(20, $user->getAge());
        $user->setAge(18);
        $this->assertSame(18, $user->getAge());
    }

    public function testDataMapperNotWorkingWithWrongData(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $dataMapper = new UserMapper($storage);

        $dataMapper->findById(1);
    }
}
