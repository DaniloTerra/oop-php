<?php

namespace Pclt;

use Pclt\Driver;

class HumanDriver implements Driver
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello() : string
    {
        return "Hey there! My name's " . $this->name;
    }
}