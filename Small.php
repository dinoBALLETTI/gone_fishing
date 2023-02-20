<?php

include_once("AFish.php");

class Gudgeon extends Afish
{
    public function construct()
    {
        parent::__construct($fishName, $fishWeight);
        $this->fishName = "Gudgeon";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $fishWeight $fishName !";
    }
}
