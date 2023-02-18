<?php

declare(strict_types=1);

namespace Structural;

use InvalidArgumentException;
use Tests\TestCase;
use Twent\DesignPatterns\Structural\Registry\Service;
use Twent\DesignPatterns\Structural\Registry\ServiceName;
use Twent\DesignPatterns\Structural\Registry\Services;
use TypeError;

final class RegistryTest extends TestCase
{
    private Service $service;

    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testSetAndGetWorksWithRightData()
    {
        Services::set(ServiceName::Logger, $this->service);

        $this->assertSame($this->service, Services::get(ServiceName::Logger));
    }

    public function testThrowsExceptionWhenTryingToSetWithInvalidKeyType()
    {
        $this->expectException(TypeError::class);

        Services::set('not-exists', $this->service);
    }

    public function testThrowsExceptionWhenTryingToGetByNotExistsKey()
    {
        $this->expectException(InvalidArgumentException::class);

        Services::get(ServiceName::Email);
    }

    public function testThrowsExceptionWhenTryingToGetByInvalidKeyType()
    {
        $this->expectException(TypeError::class);

        Services::get('not-working');
    }
}
