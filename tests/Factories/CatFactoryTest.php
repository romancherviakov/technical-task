<?php

use PHPUnit\Framework\TestCase;

class CatFactoryTest extends TestCase
{
    public function testFactoryCreateBirdInstance()
    {
        $catFactory = new \Zoo\Animals\Factories\CatFactory();
        $catInstance = $catFactory->createEntity();

        $this->assertInstanceOf(\Zoo\Animals\Entities\Cat::class, $catInstance);
    }
}