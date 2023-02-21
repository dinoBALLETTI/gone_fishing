<?php

//include("iFishing.php");

abstract class Afish //implements iFishing
{

    protected $name;
    protected $weight;
    
    public function getName(){return $this->name;}
    public function getWeight(){return $this->weight;}

    public function __construct($fishName, $fishWeight)
    {
        $this->name = $fishName;
        $this->weight = $fishWeight;
        //$this->odds = $fishOdds;
    }
    abstract public function fishbite();
}
