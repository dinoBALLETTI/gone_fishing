<?php

class Perch extends AFish 
{
    function __construct()
    {
        $this->name = "Perch";
        $this->weight = (rand (250, 2258)/1000);
    }        
}

class Rudd extends AFish 
{
    function __construct()
    {
        $this->name = "Rudd";
        $this->weight = (rand (50, 2090)/1000);
    }        
}

class Roach extends AFish 
{
    function __construct()
    {
        $this->name = "Roach";
        $this->weight = (rand (50, 1804)/1000);
    }        
}

class Barbel extends AFish 
{
    function __construct()
    {
        $this->name = "Barbel";
        $this->weight = (rand (2700, 9490)/1000);
    }        
}

class Bream extends AFish 
{
    function __construct()
    {
        $this->name = "Bream";
        $this->weight = (rand (1350, 8620)/1000);
    }        
}    

class Eel extends AFish 
{
    function __construct()
    {
        $this->name = "Eel";
        $this->weight = (rand (500, 5020)/1000);
    }        
}

class Tench extends AFish 
{
    function __construct()
    {
        $this->name = "Tench";
        $this->weight = (rand (1000, 6890)/1000);
    }        
}

class Chub extends AFish 
{
    function __construct()
    {
        $this->name = "Chub";
        $this->weight = (rand (1300, 3987)/1000);
    }        
}  

class Grayling extends AFish 
{
    function __construct()
    {
        $this->name = "Grayling";
        $this->weight = (rand (150, 1889)/1000);
    }        
} 

?>