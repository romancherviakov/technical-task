<?php

namespace Zoo\Animals\Factories;

use Zoo\Animals\Entities\AnimalInterface;
use Zoo\Animals\Entities\Rat;

class RatFactory implements AnimalFactoryInterface
{
    function createEntity(): AnimalInterface
    {
        return new Rat();
    }
}