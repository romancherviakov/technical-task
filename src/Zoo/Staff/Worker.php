<?php

namespace Zoo\Staff;

use Zoo\Animals\Entities\AnimalInterface;

class Worker extends AbstractHuman
{
    public function feed(AnimalInterface $animal)
    {
        return $animal->eat();
    }

    public function giveName(AnimalInterface $animal, $name)
    {
        $animal->giveName($name);
    }
}