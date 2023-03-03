<?php

declare(strict_types=1);

namespace Structural;

use Tests\TestCase;
use Twent\DesignPatterns\Structural\Decorator\ExtraBed;
use Twent\DesignPatterns\Structural\Decorator\MultipleRooms;
use Twent\DesignPatterns\Structural\Decorator\SingleRoom;
use Twent\DesignPatterns\Structural\Decorator\WiFi;

final class DecoratorTest extends TestCase
{
    public function testDecoratorPatternWorksWithRightData(): void
    {
        // Single room
        $singleRoom = new SingleRoom();

        $this->assertSame(200, $singleRoom->getPrice());
        $this->assertSame('Single room', $singleRoom->getDescription());

        // Single room with Wi-Fi
        $singleRoom = new WiFi($singleRoom);
        $this->assertSame(250, $singleRoom->getPrice());
        $this->assertSame('Single room with Wi-Fi', $singleRoom->getDescription());

        // Three rooms
        $multipleRooms = new MultipleRooms(250, 3, 'Three rooms');
        $this->assertSame(750, $multipleRooms->getPrice());
        $this->assertSame('Three rooms', $multipleRooms->getDescription());
        $multipleRooms = new ExtraBed($multipleRooms);
        $this->assertSame('Three rooms with extra bed', $multipleRooms->getDescription());
        $this->assertSame(950, $multipleRooms->getPrice());
        $multipleRooms = new WiFi($multipleRooms);
        $this->assertSame('Three rooms with extra bed with Wi-Fi', $multipleRooms->getDescription());
        $this->assertSame(1000, $multipleRooms->getPrice());
    }
}
