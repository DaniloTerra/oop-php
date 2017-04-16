<?php

namespace Pclt;

use Pclt\Driver;

class RobotDriver implements Driver
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello() : string
    {
        return "Hey, there! I'm a robot and my name's " . $this->name;
    }
}