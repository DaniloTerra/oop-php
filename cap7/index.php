<?php

$ferrari = new SportCar();
$ferrari->setModel('Ferrari Enzo');
$ferrari->setStyle('Really Fast');
echo $ferrari->sayHello();
echo "<br>";
echo $ferrari->run();

class Car
{
	protected $model;

	public final function setModel($model)
	{
		$this->model = $model;
	}

	public final function sayHello()
	{
		return "Hello! I'm a " . $this->model . " car.";
	}

	public function run()
	{
		return "I'm running without breaking the law";
	}
}

class SportCar extends Car
{
	private $style;

	public final function setStyle($style)
	{
		$this->style = $style;
	}

	public function run()
	{
		return "Hello! I'm " . $this->model . ". Drive me " . $this->style . ". Break the law!";
	}
}



































// $ferrari = new SportCar();
// $ferrari->setModel('Ferrari Enzo');
// $ferrari->setStyle('Fast and Furious');
// echo $ferrari->sayHello();
// echo "<br>";
// echo $ferrari->driveItWithStyle();


// class Car
// {
// 	protected $model;

// 	public function setModel($model)
// 	{
// 		$this->model = $model;
// 	}

// 	public function sayHello()
// 	{
// 		return "Hello! I'm a " . $this->model . " car.";
// 	}
// }

// class SportCar extends Car
// {
// 	private $style;

// 	public function setStyle($style)
// 	{
// 		$this->style = $style;
// 	}

// 	public function driveItWithStyle()
// 	{
// 		return "I'm a " . $this->model . ". So drive me " . $this->style;
// 	}
// }


































// $ferrari = new SportCar();
// $ferrari->setModel('Ferrari Enzo');
// echo $ferrari->sayHello();

// class Car
// {
// 	private $model;

// 	public function setModel($model)
// 	{
// 		$this->model = $model;
// 	}

// 	public function sayHello()
// 	{
// 		return "Hello, I'm a " . $this->model . " car!";
// 	}
// }

// class SportCar extends Car {}