<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Flyweight;

abstract class BaseMail implements Mail
{
    public function __construct(
        protected string $text = 'text',
        protected MailType $type = MailType::Personal
    ) {
    }

    public function render(): string
    {
        return "{$this->getText()} - this is a {$this->getType()} mail";
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getType(): string
    {
        return $this->type->value;
    }
}
