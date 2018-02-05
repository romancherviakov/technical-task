<?php

namespace Zoo\Animals\Factories;

use Zoo\Animals\Entities\AnimalInterface;
use Zoo\Animals\Entities\Cat;

class CatFactory implements AnimalFactoryInterface
{
    function createEntity(): AnimalInterface
    {
        return new Cat();
    }
}