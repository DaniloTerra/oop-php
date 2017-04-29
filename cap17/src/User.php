<?php

namespace Dmt;

class User
{
    private $name;
    private $age;

    public function setName(string $name)
    {
        if (strlen($name) < 3) {
            throw new \Exception("The user's name can't have less than 3 letters");
        }

        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        if ($age < 0) {
            throw new \Exception("The user's age can't be less than zero");
        }

        $this->age = $age;
    }

    public function getAge() : int
    {
        return $this->age;
    }
}