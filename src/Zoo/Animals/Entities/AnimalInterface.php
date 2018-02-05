<?php

namespace Zoo\Animals\Entities;

interface AnimalInterface
{
    const UNNAMED = 'unnamed';

    public function eat();
    public function say();
    public function walk();
}