<?php

namespace Zoo\Animals\Factories;

use Zoo\Animals\Entities\AnimalInterface;
use Zoo\Animals\Entities\Fish;

class FishFactory implements AnimalFactoryInterface
{

    function createEntity(): AnimalInterface
    {
        return new Fish();
    }
}