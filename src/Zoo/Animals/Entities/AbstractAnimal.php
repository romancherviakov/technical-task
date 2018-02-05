<?php

namespace Zoo\Animals\Entities;

abstract class AbstractAnimal implements AnimalInterface
{
    public $name;

    public function __construct()
    {
        $this->name = self::UNNAMED;
    }

    public function giveName($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        return "{$this->name} started eating";
    }
}