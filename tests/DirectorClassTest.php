<?php

class DirectorClassTest extends \PHPUnit\Framework\TestCase
{
    public function testDirectorCanBuyAnimals()
    {
        $director = new \Zoo\Staff\Director('Director');

        $fish = $director->buyFish();
        $bird = $director->buyBird();
        $monkey = $director->buyMonkey();

        $this->assertInstanceOf(\Zoo\Animals\Entities\Fish::class, $fish);
        $this->assertInstanceOf(\Zoo\Animals\Entities\Bird::class, $bird);
        $this->assertInstanceOf(\Zoo\Animals\Entities\Monkey::class, $monkey);
    }

    public function testThrowWrongAnimalException()
    {
        $this->expectException(\Zoo\Staff\Exceptions\AnimalIsNotSupportedException::class);

        $director = new \Zoo\Staff\Director('Director');
        $director->buyCow();
    }

    public function testThrowWrongMethodException()
    {
        $this->expectException(\Zoo\Staff\Exceptions\WrongMethodNameException::class);

        $director = new \Zoo\Staff\Director('Director');
        $director->getFish();
    }
}