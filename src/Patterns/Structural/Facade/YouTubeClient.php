<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Facade;

final class YouTubeClient
{
    private string $url;

    public function __construct(
        private readonly string $token
    ) {
    }

    public function fetchVideo(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function saveAs(string $url, string $filePath): string
    {
        $this->url = $url;

        return $filePath;
    }

    public function getTitle(): string
    {
        return basename($this->url);
    }
}
