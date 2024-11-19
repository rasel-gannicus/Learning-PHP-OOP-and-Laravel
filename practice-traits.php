<?php 
    error_reporting(E_ALL) ;
    ini_set('display_errors', 1) ;

    trait MessageForItalyOrigin {
        public function showCountry(){
            echo "This car is not from future , it's from Italy <br /> " ;
        }
    }

    trait MessageForSportsCar{
        public function showGenre(){
            echo "This is a sports car not the typical sedan one <br /> " ;
        }
    }

    class Audi {
        use MessageForSportsCar ;
    }

    class Ferrari {
        use MessageForItalyOrigin, MessageForSportsCar  ;
    }

    $audi = new Audi ;
    $ferrari = new Ferrari ; 

    $audi->showGenre() ;
    $ferrari->showCountry() ;
    $ferrari->showGenre() ; 

?>