<?php
    class Car {
        public $brand ; 
        public $country ; 

        public function __construct($name, $origin){
            $this->brand = $name ;
            $this->country = $origin ;
        }

        public function message (){
            echo ("We have {$this->brand} from {$this->country} <br />") ;
        }
    }

    class Bus extends Car {
        public function message() {
            echo "Am I a Car or a Bus ? ";
          }
    }

    $audi = new Car("Audi", "England") ;
    $volvo = new Bus("Volvo", "France") ;

    echo ("Car Brand : ".$audi->brand) ;
    echo("<br />") ;
    $audi->message() ;
    $volvo->message() ;

?>