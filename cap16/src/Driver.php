<?php

namespace Pclt;

interface Driver
{
    public function __construct(string $name);
    public function sayHello() : string;
}