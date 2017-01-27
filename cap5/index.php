<?php

$bmw = new Car();
$bmw->setModel('BMW');
$bmw->introduce();

echo("<br>");

$fiat = new Car();
$fiat->setModel('FIAT');
$fiat->introduce();

class Car
{
    private $model = 'none';
    private $allowedModels = ['Mercedes', 'BMW', 'Toyota', 'Honda'];

    public function getModel()
    {

        return $this->model;
    }

    public function setModel($model)
    {
        if (in_array($model, $this->allowedModels)) {
            $this->model = $model;
            return true;
        }
        return false;
    }

    public function introduce()
    {
        echo "Hello! I'm a " . $this->getModel() . " car.";
    }
}
