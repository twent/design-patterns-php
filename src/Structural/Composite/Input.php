<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Composite;

final class Input implements Rendered
{
    public function __construct(
        private readonly string $name,
        private readonly string $label = '',
        private readonly InputType $type = InputType::Text
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getType(): string
    {
        return $this->type->value;
    }

    public function render(): string
    {
        return <<<HTML
                <label>
                    {$this->label}
                    <input type="{$this->type->value}" name="{$this->name}">
                </label>
                HTML;
    }
}
