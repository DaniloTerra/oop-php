<?php

require_once __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

echo "Name: ";
echo $faker->name;
echo "<br>";

echo "Address: ";
echo $faker->address;
echo "<br>";

echo "Text: ";
echo $faker->text;
echo "<br>";