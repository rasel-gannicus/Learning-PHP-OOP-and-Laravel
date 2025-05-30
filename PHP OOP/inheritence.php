<?php 
    class Profile{
        public $user_name ; 
        public $user_email ;

        public function __construct($name, $email){
            $this->user_name = $name ; 
            $this->user_email = $email ; 
        }

        final public function say_my_name(){
            echo "My name is : ".$this->user_name ;
            echo "</br>" ;
        }
    }

    class Admin extends Profile{

        // overriding the method of 
        public function say_my_name()
        {
            echo "I am the admin now" ;
        }
    }

    $user1 = new Admin("Rasel", 'rasel@gmail.com');
    $user1->say_my_name();

    // output : 
    // My name is : Rasel
?> 