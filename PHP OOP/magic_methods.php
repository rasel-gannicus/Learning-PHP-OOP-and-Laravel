<?php 
    class User {
        public $data = [
            "email" => "rasel@gmail.com" ,
            "name" => "Shafiqul Hasan Rasel"
        ] ;

        public function __get($property){
            echo "Getting Property : $property <br>";
            return $this->data[$property] ?? "$property not found !" ;
        }
    }

    $rasel = new User() ;
    echo $rasel->email ; 

    // output : 
    // Getting Property : email
    // rasel@gmail.com
?>