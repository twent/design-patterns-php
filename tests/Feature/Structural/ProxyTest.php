<?php

declare(strict_types=1);

namespace Structural;

use Tests\TestCase;
use Twent\DesignPatterns\Structural\Proxy\BankAccountProxy;

final class ProxyTest extends TestCase
{
    public function testProxyPatternWorksFine(): void
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(3000);
        $this->assertSame(3000, $bankAccount->getBalance());

        $bankAccount->deposit(5000);
        // Heavy operations isn't running again
        $this->assertSame(3000, $bankAccount->getBalance());
    }
}
