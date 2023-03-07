<?php

declare(strict_types=1);

namespace Twent\DesignPatterns\Structural\DependencyInjection;

final class Route
{
    public function __construct(
        private RouteConfig $config,
    ) {
    }

    public function getConfig(): string
    {
        return $this->config->getMethod() . ' | '
               . $this->config->getPath() . ' | '
               . $this->config->getAction() . ' | '
               . $this->config->getName();
    }

    public function setConfig(RouteConfig $config): void
    {
        $this->config = $config;
    }
}
