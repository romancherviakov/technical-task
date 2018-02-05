<?php

namespace Zoo\Animals\Factories;

use Zoo\Animals\Entities\AnimalInterface;
use Zoo\Animals\Entities\Bird;

class BirdFactory implements AnimalFactoryInterface
{
    function createEntity(): AnimalInterface
    {
        return new Bird();
    }
}