<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Patterns\Creational\AbstractFactory\FulltimeEmployeeFactory;
use Patterns\Creational\AbstractFactory\TemporaryEmployeeFactory;
use Patterns\Creational\Factory\EmployeeFactory;
use Patterns\Creational\FactoryMethod\DesignerFactory;
use Patterns\Creational\FactoryMethod\WebDeveloperFactory;
use Patterns\Creational\Singleton\DatabaseConnection;
use Patterns\Creational\StaticFactory\EmployeeFactory as StaticEmployeeFactory;

echo "Creational patterns (examples of usage):";
echo "1. Singleton" . PHP_EOL;
$connection = DatabaseConnection::getInstance();
$connection2 = DatabaseConnection::getInstance();
$connection->setName('db_name');

var_dump($connection2->getName());

echo "2. Factory" . PHP_EOL;
$employee = EmployeeFactory::make('Firstname');
var_dump($employee->getFirstName());

echo "3. Factory method (virtual constructor)" . PHP_EOL;
$webDeveloper = WebDeveloperFactory::make();
$designer = DesignerFactory::make();
$webDeveloper->work();
$designer->work();

echo "4. Static Factory" . PHP_EOL;
$designer2 = StaticEmployeeFactory::make('designer');
$designer2?->work();

echo "5. Abstract Factory" . PHP_EOL;
$webDeveloper2 = FulltimeEmployeeFactory::makeWebDeveloper();
$designer3 = TemporaryEmployeeFactory::makeDesigner();
$webDeveloper2->work();
$designer3->work();

echo "6. Builder " . PHP_EOL;

