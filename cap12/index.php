<?php


abstract class Fruit
{
    public function __construct()
    {
        echo $this->name;
    }
}











interface User
{
    public function getUsername();
    public function setUsername(string $username);
    public function getGender();
    public function setGender(string $gender);
}

class Commentator implements User
{
    private $username;
    private $gender;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender(string $gender)
    {
        $this->gender = $gender;
    }
}

function addFormalGreeting(User $user)
{
    if ($user->getGender() === 'female') {
        return 'Mrs. ' . $user->getUsername();
    }

    return 'Mr. ' . $user->getUsername();
}

$danilo = new Commentator();
$danilo->setUsername('Danilo');
$danilo->setGender('male');

$bia = new Commentator();
$bia->setUsername('Beatriz');
$bia->setGender('female');

echo addFormalGreeting($danilo);
echo "<br>";
echo addFormalGreeting($bia);
