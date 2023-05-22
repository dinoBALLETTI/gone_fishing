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

class Minnow extends Afish
{
    function __construct()
    {
        $this->fishName = "Minnow";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}

class Ruffe extends Afish
{
    function __construct()
    {
        $this->fishName = "Minnow";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}

class Bullhead extends Afish
{
    function __construct()
    {
        $this->fishName = "Minnow";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}

class Stone_Loach extends Afish
{
    function __construct()
    {
        $this->fishName = "Minnow";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}

class Bleak extends Afish
{
    function __construct()
    {
        $this->fishName = "Minnow";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}