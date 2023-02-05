<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Twent\DesignPatterns\Creational\Factory\EmployeeFactory;
use Twent\DesignPatterns\Creational\FactoryMethod\DesignerFactory;
use Twent\DesignPatterns\Creational\FactoryMethod\WebDeveloperFactory;
use Twent\DesignPatterns\Creational\Singleton\DatabaseConnection;
use Twent\DesignPatterns\Creational\StaticFactory\EmployeeFactory as StaticEmployeeFactory;

// 1. Singleton
$connection = DatabaseConnection::getInstance();
$connection2 = DatabaseConnection::getInstance();
$connection->setName('db_name');

var_dump($connection2->getName());

// 2. Factory
$employee = EmployeeFactory::make('Firstname');
var_dump($employee->getFirstName());

// 3. Factory method (virtual constructor)
$webDeveloper = WebDeveloperFactory::make();
$designer = DesignerFactory::make();
$webDeveloper->work();
$designer->work();

// 4. Static Factory
$designer2 = StaticEmployeeFactory::make('designer');
$designer2?->work();
