<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Proxy;

final class BankAccountProxy extends HeavyBankAccount implements BankAccount
{
    private ?int $balance = null;

    public function getBalance(): int
    {
        if (! $this->balance) {
            // Call heavy operations
            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}
