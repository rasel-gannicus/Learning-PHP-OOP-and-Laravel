<?php
    class Car {
        public $brand ;
        public $country ;

        // constructor
        function __construct($name){
            $this->brand = $name ; 
        }

        // destructor
        function __destruct(){
            echo "This {$this->brand} from parent class <br /> " ;
        }
    }

    class Bus extends Car {
        function __destruct(){
            echo "This is from inherited class "
        }
    }

    $audi = new Car('Audi') ;
    $volvo = new Bus('Volvo') ;

?>