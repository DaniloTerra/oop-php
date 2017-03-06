<?php

$user1 = new User('Danilo', 'Terra');
echo 'Welcome, ' . $user1->getFullName();

class User
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;

        return $this;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
