<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Proxy;

class HeavyBankAccount implements BankAccount
{
    private array $transactions = [];

    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int
    {
        // Здесь ресурсоёмкие расчёты, "дорогое" взаимодействие с БД и т.д.
        return array_sum($this->transactions);
    }
}
