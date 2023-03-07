<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Flyweight;

final class BusinessMail extends BaseMail
{
    public function __construct(
        string $text = 'text',
        MailType $type = MailType::Business
    ) {
        parent::__construct($text, $type);
    }
}
