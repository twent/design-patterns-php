<?php

declare(strict_types=1);

namespace Tests\Unit\Enums\Traits;

use Tests\TestCase;
use Twent\DesignPatterns\Creational\StaticFactory\EmployeeType;

final class EnumToArrayTraitTest extends TestCase
{
    public function testEnumToArrayTraitIsWorking()
    {
        $enumWithTrait = EmployeeType::class;

        $this->assertTrue(method_exists($enumWithTrait, 'array'));
        $this->assertTrue(method_exists($enumWithTrait, 'names'));
        $this->assertTrue(method_exists($enumWithTrait, 'values'));

        $this->assertIsArray($enumWithTrait::array());
        $this->assertIsArray($enumWithTrait::names());
        $this->assertIsArray($enumWithTrait::values());

        $this->assertArrayHasKey(EmployeeType::WebDeveloper->name, $enumWithTrait::array());
        $this->assertContains(EmployeeType::WebDeveloper->value, $enumWithTrait::values());
        $this->assertNotContains('not-exists', $enumWithTrait::values());
    }
}
