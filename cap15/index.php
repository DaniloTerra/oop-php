<?php

require 'src/Car/CarIntro.php';
require 'src/Car/CarPrice.php';

use Acme\Car\CarIntro as Intro;
use Acme\Car\CarPrice as Price;

$intro = new Intro();
echo $intro->sayHello();

echo "<br>";

$price = new Price();
echo $price->getQuote();