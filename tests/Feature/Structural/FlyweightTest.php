<?php

declare(strict_types=1);

namespace Structural;

use Tests\TestCase;
use Twent\DesignPatterns\Structural\Flyweight\BusinessMail;
use Twent\DesignPatterns\Structural\Flyweight\MailFactory;
use Twent\DesignPatterns\Structural\Flyweight\MailType;
use Twent\DesignPatterns\Structural\Flyweight\PersonalMail;

final class FlyweightTest extends TestCase
{
    public function testFlyweightPatternWorks(): void
    {
        $mailFactory = new MailFactory();
        $personalMail = $mailFactory->get(1);
        $businessMail = $mailFactory->get(3, MailType::Business);

        $this->assertInstanceOf(PersonalMail::class, $personalMail);
        $this->assertInstanceOf(BusinessMail::class, $businessMail);

        $this->assertStringContainsString('personal', $personalMail->render());
        $this->assertStringContainsString('business', $businessMail->render());

        $personalMail->setText('new text');
        $this->assertStringContainsString('new text', $personalMail->render());
    }
}
