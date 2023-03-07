<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Composite;

use Twent\DesignPatterns\Structural\DependencyInjection\HttpMethod;

final class Form implements Rendered
{
    public function __construct(
        private readonly ?string $action = null,
        private readonly HttpMethod $method = HttpMethod::Post,
        private array $elements = [],
    ) {
    }

    public function getMethod(): string
    {
        return $this->method->value;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function addElement(Rendered $elements): Form
    {
        $this->elements[] = $elements;

        return $this;
    }

    public function render(): string
    {
        if (! $this->action) {
            $form = '<form method="' . $this->getMethod() . '">';
        } else {
            $form = '<form method="' . $this->getMethod() . '" action="' . $this->action . '">';
        }

        foreach ($this->elements as $element) {
            $form .= $element->render();
        }

        $form .= '</form>';

        return preg_replace('/[\r\n]/', '', $form);
    }
}
