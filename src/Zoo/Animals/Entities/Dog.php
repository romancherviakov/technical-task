<?php

namespace Zoo\Animals\Entities;

class Dog extends AbstractMammal
{
    public function say()
    {
        return 'Wof!';
    }

    public function beat(AnimalInterface $animal)
    {
        return $this->name . ' beat ' . $animal->name;
    }

    public function protest()
    {
        return $this->name . " doesn't like this food";
    }
}