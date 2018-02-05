<?php

class MonkeyFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testFactoryCreateMonkeyInstance()
    {
        $monkeyFactory = new \Zoo\Animals\Factories\MonkeyFactory();
        $monkeyInstance = $monkeyFactory->createEntity();

        $this->assertInstanceOf(\Zoo\Animals\Entities\Monkey::class, $monkeyInstance);
    }
}