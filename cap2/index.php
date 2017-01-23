<?php

class Car {
	public $company;
	public $color;
	public $hasSunRoof = true;

	public function hello()
	{
		return "Hello. I'm a " . $this->company . " car. And I'm " . $this->color . " </br>";
	}
}

$bmw = new Car();
$mercedes = new Car();

$bmw->company    = 'BMW';
$bmw->color      = 'White';
$bmw->hasSunRoof = true;

$mercedes->company    = 'Mercedes';
$mercedes->color      = 'Black';
$mercedes->hasSunRoof = false;

echo $bmw->hello();
echo $mercedes->hello();