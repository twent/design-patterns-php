<?php

declare(strict_types=1);

namespace Structural;

use Tests\TestCase;
use Twent\DesignPatterns\Structural\Composite\Button;
use Twent\DesignPatterns\Structural\Composite\ButtonType;
use Twent\DesignPatterns\Structural\Composite\Form;
use Twent\DesignPatterns\Structural\Composite\Input;
use Twent\DesignPatterns\Structural\Composite\InputType;

final class CompositeTest extends TestCase
{
    public function testCompositePatternWorks()
    {
        $form = new Form();
        $form->addElement(new Input('email', 'Email:', InputType::Email));
        $form->addElement(new Input('password', 'Password:', InputType::Password));
        $form->addElement(new Button('Register', ButtonType::Submit));
        $renderedForm = $form->render();

        $this->assertStringContainsString('<form method="POST">', $renderedForm);
        $this->assertStringContainsString('Email:', $renderedForm);
        $this->assertStringContainsString('<input type="email" name="email">', $renderedForm);
        $this->assertStringContainsString('<input type="password" name="password">', $renderedForm);
        $this->assertStringContainsString('Register</button>', $renderedForm);

        $this->assertStringNotContainsString('Login</button>', $renderedForm);
    }
}
