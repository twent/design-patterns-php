<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Twent\DesignPatterns\Creational\AbstractFactory\FulltimeEmployeeFactory;
use Twent\DesignPatterns\Creational\AbstractFactory\TemporaryEmployeeFactory;
use Twent\DesignPatterns\Creational\Builder\MysqlQueryBuilder;
use Twent\DesignPatterns\Creational\Builder\PostgresQueryBuilder;
use Twent\DesignPatterns\Creational\Builder\Users;
use Twent\DesignPatterns\Creational\Factory\EmployeeFactory;
use Twent\DesignPatterns\Creational\FactoryMethod\DesignerFactory;
use Twent\DesignPatterns\Creational\FactoryMethod\WebDeveloperFactory;
use Twent\DesignPatterns\Creational\Singleton\DatabaseConnection;
use Twent\DesignPatterns\Creational\StaticFactory\EmployeeFactory as StaticEmployeeFactory;

echo "Creational patterns (examples of usage):" .  PHP_EOL;
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

echo "6. Builder" . PHP_EOL;
$mysqlBuilder = MysqlQueryBuilder::make();
$postgresBuilder = PostgresQueryBuilder::make();
echo "Query for MySql:" . PHP_EOL;
Users::getOldest($mysqlBuilder);
echo "Query for PostgreSql:" . PHP_EOL;
Users::getOldest($postgresBuilder);
