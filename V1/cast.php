<?php

include("lake.php");

$randomFish = $lake[array_rand($lake)];
$catchMessage = "You caught a nice " . $randomFish->getWeight() . " kg " . $randomFish->getName() . "!" . PHP_EOL;
echo $catchMessage;