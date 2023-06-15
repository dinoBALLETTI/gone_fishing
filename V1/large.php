<?php

class Carp extends AFish 
{
    function __construct()
    {
        $this->name = "Carp";
        $this->weight = (rand (2700, 29474)/1000);
    }        
}


class Pike extends AFish 
{
    function __construct()
    {
        $this->name = "Pike";
        $this->weight = (rand (200, 21224)/1000);
    }        
}


class Catfish extends AFish 
{
    function __construct()
    {
        $this->name = "Catfish";
        $this->weight = (rand (5000, 30113)/1000);
    }        
}

class GrassCarp extends AFish 
{
    function __construct()
    {
        $this->name = "GrassCarp";
        $this->weight = (rand (3500, 20175)/1000);
    }        
}
?>