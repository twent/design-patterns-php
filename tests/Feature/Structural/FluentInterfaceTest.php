<?php

declare(strict_types=1);

namespace Structural;

use Tests\TestCase;
use Twent\DesignPatterns\Structural\FluentInterface\SqlQuery;

final class FluentInterfaceTest extends TestCase
{
    public function testFluentInterfaceWorksFine(): void
    {
        $query = new SqlQuery();

        $query
            ->select('id', 'title', 'count')
            ->from('goods', 'g')
            ->where('id > 1');

        $this->assertSame(
            'SELECT id, title, count FROM goods AS g WHERE id > 1',
            (string) $query
        );
    }
}
