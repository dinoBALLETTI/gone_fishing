<?php
include("small.php");
include("medium.php");
include("large.php");

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

$river = array(
    new Gudgeon(), new Minnow(), new Ruffe(), new Bleak(), new StoneLoach(), new Bullhead(), new Stickleback(), new Dace(),
    new Perch(), new Roach(), new Rudd(), new Eel(), new Barbel(), new Bream(), new Tench(), new Chub(), new Grayling(),
    new Pike(), new Carp(), new GrassCarp(), new Catfish()
);

$randomFish = $river[array_rand($river)];
$catchMessage = "You caught a nice " . $randomFish->getWeight() . " kg " . $randomFish->getName() . "!" . PHP_EOL;
echo $catchMessage;
?>