<?php

echo 'oiiii';

interface Shape
{
    public function calcArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calcArea()
    {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calcArea()
    {
        return $this->width * $this->height;
    }
}