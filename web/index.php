<?php

// requiring autoload classes
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/bootstrap.php';


try {
    // creating zoo staff
    $director = new \Zoo\Staff\Director('Bobby');
    $worker = new \Zoo\Staff\Worker('John');


    $goldFish = $director->buyFish();

    $worker->giveName($goldFish, 'Goldy');
    $result = $worker->feed($goldFish);

    echo $result . "</br>";

    // seems like goldy happy, but she can not say thank you
    $thanks = $goldFish->say();
    echo $thanks . "</br>";

    // or some more advanced way

    // showing animals for buying
    $animalsList = ['cat', 'dog', 'fish', 'monkey', 'bird', 'rat'];

    foreach ($animalsList as $animal) {
        $animals[$animal] = $director->{'buy' . ucfirst($animal)}();
    }

    // taking care about new animals and feeding them
    foreach ($animalsList as $animal) {
        $worker->giveName($animals[$animal], 'Cute ' . $animal);

        $thanks = $worker->feed($animals[$animal]);
        echo $thanks . "</br>";
    }

    // seems like dog didn't like food :)
    $dogMoves = $animals['dog']->walk();
    echo $dogMoves . "</br>";

    $dogDoesNotLikeFood = $animals['dog']->beat($worker);
    echo $dogDoesNotLikeFood . "</br>";

    $wof = $animals['dog']->protest();
    echo $wof . "</br>";
} catch (\Zoo\Staff\Exceptions\WrongMethodNameException $e) {
    echo $e->getMessage() . "</br>Directot can only buy animals";
} catch (\Zoo\Staff\Exceptions\AnimalIsNotSupportedException $e) {
    echo $e->getMessage() . "</br>Seems like this animal can not be found in store";
}
