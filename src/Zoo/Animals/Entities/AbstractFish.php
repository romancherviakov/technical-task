<?php

namespace Zoo\Animals\Entities;

abstract class AbstractFish extends AbstractAnimal
{

    abstract public function say();

    public function walk()
    {
        return $this->name . ' swimming';
    }
}