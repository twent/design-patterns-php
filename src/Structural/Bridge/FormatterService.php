<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Bridge;

abstract class FormatterService
{
    public function __construct(
        protected Formatter $formatter
    ) {
    }

    public function getFormatted(string $text): string
    {
        return $this->formatter->format($text);
    }
}
