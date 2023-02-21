<?php

include_once("AFish.php");

class Gudgeon extends Afish
{
    function __construct()
    {
        $this->fishName = "Gudgeon";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}
