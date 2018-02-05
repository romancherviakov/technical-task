<?php

use PHPUnit\Framework\TestCase;

class BirdFactoryTest extends TestCase
{
    public function testFactoryCreateBirdInstance()
    {
        $birdFactory = new \Zoo\Animals\Factories\BirdFactory();
        $birdInstance = $birdFactory->createEntity();

        $this->assertInstanceOf(\Zoo\Animals\Entities\Bird::class, $birdInstance);
    }
}