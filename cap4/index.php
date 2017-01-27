<?php

$user = new User();

$user->firstName = 'Danilo';
$user->lastName = 'Terra';
$user->register()->mail()->hello();

class User
{
    public $firstName;
    public $lastName;

    public function register()
    {
        echo('User ' . $this->firstName . ' registered');
        echo('<br>');
        return $this;
    }

    public function mail()
    {
        echo('User ' . $this->firstName . ' mailed');
        echo('<br>');
        return $this;
    }

    public function hello()
    {
        echo("Hello " . $this->firstName . ". You're very welcome");
    }
}



// $car = new Car();
// $tank = $car->fill(10)->ride(40)->tank;
// print_r('Total: ' . $tank);
// exit;

// class Car
// {
//     public $tank;

//     public function fill($float)
//     {
//         $this->tank += $float;

//         return $this;
//     }

//     public function ride($float)
//     {
//         $miles = $float;
//         $gallons = $miles/50;
//         $this->tank -= $gallons;

//         return $this;
//     }
// }
