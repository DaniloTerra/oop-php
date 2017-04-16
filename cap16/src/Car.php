<?php

namespace Pclt;

use Pclt\Driver;

class Car
{
    private $model;
    private $driver;

    public function __construct(string $model, Driver $driver)
    {
        $this->model  = $model;
        $this->driver = $driver;
    }

    public function getDriver() : Driver
    {
        return $this->driver;
    }
}