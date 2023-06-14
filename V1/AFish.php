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

    abstract public function fishbite();
}

?>
