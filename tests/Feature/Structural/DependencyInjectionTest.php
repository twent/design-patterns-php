<?php

declare(strict_types=1);

namespace Tests\Feature\Structural;

use Tests\TestCase;
use Twent\DesignPatterns\Structural\DependencyInjection\HttpMethod;
use Twent\DesignPatterns\Structural\DependencyInjection\Route;
use Twent\DesignPatterns\Structural\DependencyInjection\RouteConfig;

final class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjectionIsWorks(): void
    {
        $config = new RouteConfig(HttpMethod::Get, '', $action = 'HomeController@index');
        $route = new Route($config);
        $routeConfigArray = explode('|', str_replace(' ', '', $route->getConfig()));

        $this->assertSame(HttpMethod::Get->value, $routeConfigArray[0]);
        $this->assertSame('/', $routeConfigArray[1]);
        $this->assertSame($action, $routeConfigArray[2]);
        $this->assertSame('index', $routeConfigArray[3]);

        $config2 = new RouteConfig(
            HttpMethod::Post,
            '/users/create/',
            $action2 = 'UsersController@create'
        );

        $route2 = new Route($config2);
        $routeConfigArray2 = explode('|', str_replace(' ', '', $route2->getConfig()));

        $this->assertSame(HttpMethod::Post->value, $routeConfigArray2[0]);
        $this->assertSame('/users/create', $routeConfigArray2[1]);
        $this->assertSame($action2, $routeConfigArray2[2]);
        $this->assertSame('users.create', $routeConfigArray2[3]);
    }
}
