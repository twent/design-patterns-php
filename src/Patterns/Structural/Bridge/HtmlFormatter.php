<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Bridge;

final class HtmlFormatter implements Formatter
{
    public function format(string $text): string
    {
        return "<p>{$text}</p>";
    }
}
