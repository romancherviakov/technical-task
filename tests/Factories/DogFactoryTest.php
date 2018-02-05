<?php

use PHPUnit\Framework\TestCase;

class DogFactoryTest extends TestCase
{
    public function testFactoryCreateDogInstance()
    {
        $dogFactory = new \Zoo\Animals\Factories\DogFactory();
        $dogInstance = $dogFactory->createEntity();

        $this->assertInstanceOf(\Zoo\Animals\Entities\Dog::class, $dogInstance);
    }
}