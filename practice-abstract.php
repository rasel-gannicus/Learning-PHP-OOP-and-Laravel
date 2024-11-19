<?php
    // --- parent class
    abstract class Car {
        public $name ; 
        public function __construct($brand){
            $this->name = $brand ;
        }

        // --- abstract method 
        abstract public function say_my_name() : string ; 
    }

    // --- child class
    class Audi extends Car{
        // --- abstract method
        public function say_my_name() : string {
            return "Say my name : {$this->name} " ; 
        }
    }
    class Mercedez extends Car{
        // --- abstract method
        public function say_my_name():string {
            return "The hometown of $this->name is Sweeden " ; 
        }
    }

    $audi = new Audi("Audi") ;
    echo $audi->say_my_name() ;
    echo "<br />" ;

    $bmw = new Mercedez("BMW") ;
    echo $bmw->say_my_name() ; 

?>