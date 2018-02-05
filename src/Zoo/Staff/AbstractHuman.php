<?php

namespace Zoo\Staff;

use Zoo\Animals\Entities\AnimalInterface;

class AbstractHuman implements AnimalInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        return 'eating potato';
    }

    public function say()
    {
        return 'Hi!';
    }

    public function walk()
    {
        return $this->name . ' walking';
    }
}