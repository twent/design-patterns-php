<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Composite;

final class Button implements Rendered
{
    public function __construct(
        private readonly string $name,
        private readonly ButtonType $type = ButtonType::Button
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type->value;
    }

    public function render(): string
    {
        return <<<HTML
            <button type="{$this->type->value}">
                {$this->name}
            </button>
            HTML;
    }
}
