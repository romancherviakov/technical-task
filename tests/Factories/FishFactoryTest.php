<?php

use PHPUnit\Framework\TestCase;

final class FishFactoryTest extends TestCase
{
    public function testFactoryCreateFishInstance()
    {
        $fishFactory = new \Zoo\Animals\Factories\FishFactory();
        $fishInstance = $fishFactory->createEntity();

        $this->assertInstanceOf(\Zoo\Animals\Entities\Fish::class, $fishInstance);
    }
}