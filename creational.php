<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Twent\DesignPatterns\Creational\Factory\EmployeeFactory;
use Twent\DesignPatterns\Creational\Singleton\DatabaseConnection;

// 1. Singleton
$connection = DatabaseConnection::getInstance();
$connection2 = DatabaseConnection::getInstance();
$connection->setName('db_name');

var_dump($connection2->getName());

// 2. Factory
$employee = EmployeeFactory::make('Firstname');
var_dump($employee->getFirstName());
