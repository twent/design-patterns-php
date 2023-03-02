<?php

declare(strict_types=1);

namespace Structural;

use Tests\TestCase;
use Twent\DesignPatterns\Structural\Bridge\HtmlFormatter;
use Twent\DesignPatterns\Structural\Bridge\HtmlService;
use Twent\DesignPatterns\Structural\Bridge\PlainTextFormatter;
use Twent\DesignPatterns\Structural\Bridge\PlainTextService;

final class BridgeTest extends TestCase
{
    public function testBridgePattern(): void
    {
        $plainTextService = new PlainTextService(new PlainTextFormatter());
        $HtmlService = new HtmlService(new HtmlFormatter());

        $this->assertSame('test', $plainTextService->getFormatted('test'));
        $this->assertSame('<p>test</p>', $HtmlService->getFormatted('test'));
    }
}
