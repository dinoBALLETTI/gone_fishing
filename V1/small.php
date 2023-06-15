<?php

class Gudgeon extends AFish 
{
    function __construct()
    {
        $this->name = "Gudgeon";
        $this->weight = (rand (30, 60)/1000);
    }        
}

class Minnow extends AFish 
{
    function __construct()
    {
        $this->name = "Minnow";
        $this->weight = (rand ( 8, 14)/1000);
    }
}

class Bullhead extends AFish 
{
    function __construct()
    {
    $this->name = "Bullhead";
    $this->weight = (rand (6, 16)/1000);
    }
}

class Bleak extends AFish 
{
    function __construct()
    {
    $this->name = "Bleak";
    $this->weight = (rand (25, 119)/1000);
    }
}

class StoneLoach extends AFish 
{
    function __construct()
    {
    $this->name = "Stone Loach";
    $this->weight = (rand (30, 60)/1000);
    }
}

class Ruffe extends AFish 
{
    function __construct()
    {
    $this->name = "Ruffe";
    $this->weight = (rand (30, 138)/1000);
    }
}

class Stickleback extends AFish 
{
    function __construct()
    {
    $this->name = "Stickleback";
    $this->weight = (rand (30, 60)/1000);
    }
};

class Dace extends AFish 
{
    function __construct()
    {
    $this->name = "Dace";
    $this->weight = (rand (50, 140)/1000);
    }
};

?> 