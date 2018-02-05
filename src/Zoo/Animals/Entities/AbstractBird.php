<?php

namespace Zoo\Animals\Entities;

abstract class AbstractBird extends AbstractAnimal
{

    abstract public function say();

    public function walk()
    {
        return $this->name . ' flying';
    }
}