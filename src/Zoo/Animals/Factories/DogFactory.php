<?php

namespace Zoo\Animals\Factories;

use Zoo\Animals\Entities\AnimalInterface;
use Zoo\Animals\Entities\Dog;

class DogFactory implements AnimalFactoryInterface
{
    function createEntity(): AnimalInterface
    {
        return new Dog();
    }
}