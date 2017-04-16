<?php

require 'src/Driver.php';
require 'src/HumanDriver.php';
require 'src/RobotDriver.php';
require 'src/Car.php';


use Pclt\Car;
use Pclt\HumanDriver as Human;
use Pclt\RobotDriver as Robot;

$human = new Human('Senna');
$carHuman = new Car('VW Fox', $human);
echo $carHuman->getDriver()->sayHello();

echo "<br>";

$robot = new Robot('R2-D2');
$carRobot = new Car('VW Golf', $robot);
echo $carRobot->getDriver()->sayHello();