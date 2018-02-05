<?php

namespace Zoo\Animals\Factories;

use Zoo\Animals\Entities\AnimalInterface;
use Zoo\Animals\Entities\Monkey;

class MonkeyFactory implements AnimalFactoryInterface
{
    function createEntity(): AnimalInterface
    {
        return new Monkey();
    }
}