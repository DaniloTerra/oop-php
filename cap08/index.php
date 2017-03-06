<?php

$admin1 = new Admin();
$admin1->setName('Jhonson');
echo $admin1->getName();
echo "<br>";
echo $admin1->stateYourRole();
echo "<br>";

echo "<br>";

$viewer1 = new Viewer();
$viewer1->setName('Danilo');
echo $viewer1->getName();
echo "<br>";
echo $viewer1->stateYourRole();
echo "<br>";

abstract class User
{
	protected $name;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	abstract function stateYourRole();
}

class Admin extends User
{
	public function stateYourRole()
	{
		return 'Admin';
	}
}

class Viewer extends User
{
	public function stateYourRole()
	{
		return 'Viewer';
	}
}