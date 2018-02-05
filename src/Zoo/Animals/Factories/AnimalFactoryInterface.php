<?php

namespace Zoo\Animals\Factories;

use Zoo\Animals\Entities\AnimalInterface;

interface AnimalFactoryInterface
{
    function createEntity() : AnimalInterface;
}