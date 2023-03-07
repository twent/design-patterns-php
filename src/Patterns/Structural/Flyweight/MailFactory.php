<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Flyweight;

final class MailFactory
{
    public function __construct(
        private array $pool = []
    ) {
    }

    public function get($id, ?MailType $type = MailType::Personal): Mail
    {
        if (! $this->pool[$id]) {
            $this->pool[$id] = $this->create($type);
        }
        return $this->pool[$id];
    }

    private function create(MailType $type): Mail
    {
        return match ($type->name) {
            'Personal' => new PersonalMail(),
            'Business' => new BusinessMail(),
        };
    }
}
