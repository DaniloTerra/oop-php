<?php

require 'src/User.php';

use Dmt\User;

try {
    $user1 = new User();
    $user1->setName('Danilo');
    $user1->setAge(24);

    echo "Hello, my name is " . $user1->getName() . ". I'm " . $user1->getAge() . " years old.";
} catch (Exception $e) {
    echo "An error ocurred, please fix it before continuing. Error: " . $e->getMessage();
}

echo "<br>";
echo "<br>";

try {
    $user2 = new User();
    $user2->setName('Gi');
    $user2->setAge(19);

    echo "Hello, my name is " . $user2->getName() . ". I'm " . $user2->getAge() . " years old.";
} catch (Exception $e) {
    echo "An error occured, please fix it before continuing. Error: " . $e->getMessage();
}