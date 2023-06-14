<?php

include("AFish.php");

class Gudgeon extends AFish {
    function __construct()
    {
        $this->name = "Gudgeon";
        $this->weight = (rand (15, 220)/1000);
    }
    
    // public function fishbite()
    // {
    //     echo $this->catchMessage;
    // }
    
}

class Minnow extends AFish {
    function __construct()
    {
        $this->name = "Minnow";
        $this->weight = (rand (15, 220)/1000);
    }
    
    // public function fishbite()
    // {
    //     echo $this->catchMessage;
    // }
    
}

// class Ruffe extends Afish
// {
//     function __construct()
//     {
//         $this->fishName = "Ruffe";
//         $this->fishWeight = (rand (15, 220)/1000);
//     }
    
//     public function fishbite()
//     {
//         echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
//     }
    
// }

// class Bullhead extends Afish
// {
//     function __construct()
//     {
//         $this->fishName = "Bullhead";
//         $this->fishWeight = (rand (15, 220)/1000);
//     }
    
//     public function fishbite()
//     {
//         echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
//     }
    
// }

// class Stone_Loach extends Afish
// {
//     function __construct()
//     {
//         $this->fishName = "Stone Loach";
//         $this->fishWeight = (rand (15, 220)/1000);
//     }
    
//     public function fishbite()
//     {
//         echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
//     }
    
// }

// class Bleak extends Afish
// {
//     function __construct()
//     {
//         $this->fishName = "Bleak";
//         $this->fishWeight = (rand (15, 220)/1000);
//     }
    
//     public function fishbite()
//     {
//         echo "You caught a nice $this->fishWeight kg $this->fishName !".PHP_EOL;
//     }
    
// }