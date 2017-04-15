<?php

interface User
{}

trait Writing
{
    public abstract function writeContent() : string;
}

class Author implements User
{
    use Writing;

    public function writeContent() : string
    {
        return 'Author, please start typing an article...';
    }
}

class Commentator implements User
{
    use Writing;

    public function writeContent() : string
    {
        return 'Commentator, please start typing your Comment...';
    }
}

class Viewer implements User
{}

$author = new Author();
$commentator = new Commentator();
$viewer = new Viewer();

echo $author->writeContent(); echo "<br>";
echo $commentator->writeContent(); echo "<br>";







































// trait Price
// {
//     public function changePriceByDollars(float $price, float $change) : float
//     {
//         return $price + $change;
//     }
// }

// trait SpecialSell
// {
//     public function announceSpecialSell() : string
//     {
//         return __CLASS__ . ' on special sell.';
//     }
// }

// trait DescribeModel
// {
//     public function describeCarModel()
//     {
//         return 'This is a ' . $this->model . ' ' . __CLASS__ . ' car model.';
//     }
// }

// class Bmw
// {
//     private $model;

//     public function __construct(string $model)
//     {
//         $this->model = $model;
//     }

//     use Price;
//     use SpecialSell;
//     use DescribeModel;
// }

// class Mercedes
// {
//     private $model;

//     public function __construct(string $model)
//     {
//         $this->model = $model;
//     }

//     use Price;
//     use SpecialSell;
//     use DescribeModel;
// }

// $bmw = new Bmw('X6');
// $mercedes = new Mercedes('CLA');

// echo $bmw->describeCarModel(); echo "</br>";
// echo $bmw->changePriceByDollars(1500.00, 300.00); echo "</br>";
// echo $bmw->announceSpecialSell(); echo "</br>";
// echo "</br>";
// echo $mercedes->describeCarModel(); echo "</br>";
// echo $mercedes->changePriceByDollars(3000.00, -500.00); echo "</br>";
// echo $mercedes->announceSpecialSell(); echo "</br>";
