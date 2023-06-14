<?php

abstract class Afish 
{
    protected $name;
    protected $weight;

    
    public function getName(){return $this->name;}
    public function getWeight(){return $this->weight;}

    public function __construct($fishName, $fishWeight)
    {
        $this->name = $fishName;
        $this->weight = $fishWeight;
    }
    abstract public function fishbite();
}

?>
