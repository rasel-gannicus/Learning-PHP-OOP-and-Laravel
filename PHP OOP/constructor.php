<?php 
    class checkConstructor {
        public $user_name ;
        public $user_age ;

        public function __construct($user_name, $user_age){
            $this->user_name = $user_name ; 
            $this->user_age = $user_age ;
        }

        public function person_details(){
            echo "Person's name is : ".$this->user_name."</br>" ; 
            echo "Person's age is : ".$this->user_age."</br>" ; 
        }
    }

    $person1 = new checkConstructor('Rasel', '32') ;
    $person1->person_details(); 

    // output : 
    // Person's name is : Rasel
    // Person's age is : 32

?> 