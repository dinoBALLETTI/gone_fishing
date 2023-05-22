<?php

class Ch extends Afish
{
    function __construct()
    {
        $this->fishName = "Chub";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}

class Bream extends Afish
{
    function __construct()
    {
        $this->fishName = "Bream";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}

class Chub extends Afish
{
    function __construct()
    {
        $this->fishName = "Chub";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}

class Dace extends Afish
{
    function __construct()
    {
        $this->fishName = "Dace ";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}

class Eel extends Afish
{
    function __construct()
    {
        $this->fishName = "Barbel";
        $this->fishWeight = (rand (15, 220)/1000);
    }
    
    public function fishbite()
    {
        echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
    }
    
}
