<?php

abstract class AFish 
{
    protected $name;
    protected $weight;
    protected $catchMessage;

    public function getName(){return $this->name;}
    public function getWeight(){return $this->weight;}

    public function __construct($fishName, $fishWeight)
    {
        $this->name = $fishName;
        $this->weight = $fishWeight;
        $this->catchMessage = "You caught a nice " . $this->weight . " kg " . $this->name . "!" . PHP_EOL;
    }
}

$lake = array(
    new Gudgeon(),
    new Minnow(),
    new Ruffe(),
    );

    class Gudgeon extends AFish 
    {
        function __construct()
        {
            $this->name = "Gudgeon";
            $this->weight = (rand (15, 220)/1000);
        }        
    }
    
    class Minnow extends AFish 
    {
        function __construct()
        {
            $this->name = "Minnow";
            $this->weight = (rand (15, 220)/1000);
        }
    }

    class Ruffe extends AFish 
    {
        function __construct()
        {
        $this->name = "Ruffe";
        $this->weight = (rand (15, 220)/1000);
        }
    }

    $randomFish = $lake[array_rand($lake)];
    $catchMessage = "You caught a nice " . $randomFish->getWeight() . " kg " . $randomFish->getName() . "!" . PHP_EOL;
    echo $catchMessage;
?>