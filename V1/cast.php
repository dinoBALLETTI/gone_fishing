<?php

include_once("lake.php");

$randomFish = $lake[array_rand($lake)];
$randomFish->fishbite("You caught a nice " . $randomFish->getWeight() . " kg " . $randomFish->getName() . "!".PHP_EOL);

