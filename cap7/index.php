<?php

$ferrari = new SportCar();
$ferrari->setModel('Ferrari Enzo');
echo $ferrari->sayHello();

class Car
{
	private $model;

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function sayHello()
	{
		return "Hello, I'm a " . $this->model . " car!";
	}
}

class SportCar extends Car {}