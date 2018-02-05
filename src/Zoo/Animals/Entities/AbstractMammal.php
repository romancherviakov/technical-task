<?php

namespace Zoo\Animals\Entities;

abstract class AbstractMammal extends AbstractAnimal
{

    abstract public function say();

    public function walk()
    {
        return $this->name . ' walking';
    }
}