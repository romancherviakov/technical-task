<?php

use PHPUnit\Framework\TestCase;

class RatFactoryTest extends TestCase
{
    public function testFactoryCreateRatInstance()
    {
        $ratFactory = new \Zoo\Animals\Factories\RatFactory();
        $ratInstance = $ratFactory->createEntity();

        $this->assertInstanceOf(\Zoo\Animals\Entities\Rat::class, $ratInstance);
    }
}