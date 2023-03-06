<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\Facade;

final class FFMpegVideo
{
    private int $width;
    private int $height;
    private array $filters = [];

    public function __construct(
        private string $path
    ) {
    }

    public function filters(string ...$filters): FFMpegVideo
    {
        foreach ($filters as $filter) {
            $this->filters[] = $filter;
        }

        return $this;
    }

    public function resize(array $size): FFMpegVideo
    {
        [$this->width, $this->height] = $size;
        return $this;
    }

    public function frame(): self
    {
        return $this;
    }

    public function save(string $path): self
    {
        $this->path = $path;
        return $this;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getFilters(): array
    {
        return $this->filters;
    }
}
