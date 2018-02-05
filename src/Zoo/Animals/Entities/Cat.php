<?php

namespace Zoo\Animals\Entities;

class Cat extends AbstractMammal
{
    public function say()
    {
        return 'meow-meow';
    }
}