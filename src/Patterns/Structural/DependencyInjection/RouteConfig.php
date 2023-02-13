<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\DependencyInjection;

final class RouteConfig
{
    public function __construct(
        private string $method,
        private string $path,
        private string $action,
        private ?string $name = null,
    ) {
        $this->method = mb_strtoupper($this->method);

        $this->path = mb_strtolower(rtrim($this->path, '/'));

        if (! str_starts_with($this->path, '/')) {
            $this->path = "/$this->path";
        }

        if (! $this->name) {
            $name = array_filter(explode('/', $this->path), 'strlen');

            if (count($name) < 2) {
                $name[] = explode('@', $this->action)[1];
            }

            $this->name = implode('.', $name);
        }
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): RouteConfig
    {
        $this->method = $method;
        return $this;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): RouteConfig
    {
        $this->path = $path;
        return $this;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): RouteConfig
    {
        $this->action = $action;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): RouteConfig
    {
        $this->name = $name;
        return $this;
    }
}
