<?php

class WorkerClassTest extends \PHPUnit\Framework\TestCase
{
    public function testWorketCanFeedAnimal()
    {
        $director = new \Zoo\Staff\Director('Director');
        $worker = new \Zoo\Staff\Worker('Worker');

        $cat = $director->buyCat();

        $worker->giveName($cat, 'Kitten');

        $this->assertEquals('Kitten', $cat->name);

        $this->assertEquals('Kitten started eating', $worker->feed($cat));
    }
}