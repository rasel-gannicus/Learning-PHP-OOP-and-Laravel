<?php 
    define("MYNAME", "Shafiqul Hasan Rasel") ;

    class Profile {
        public $user_name ;
        public $user_email ; 
        public $user_password ; 
        
        // destructor 
        // this will be printed at the last time when all other works in this class will be completed , yet i have declared it at very first moment, this is how destructor works. 
        public function __destruct(){
            echo '<br/> This class has been destroyed' ;
        }

        // constructor 
        public function __construct($name, $email){
            $this->user_name = $name ; 
            $this->user_email = $email ; 
        }


        // declaring constant
        const ADMIN_NAME = "Rasel" ; 

        public function say_my_name(){
            echo 'User Name is : '.$this->user_name."<br>" ; 
        }

        // accessing the constant from inside of the class
        public function calling_constant_from_inside(){
            echo "Admin name (from inside of the class) : ".self::ADMIN_NAME."</br>" ;
        }
    }

    $abir = new Profile('Abir Rahman', 'abir@gmail.com') ;
    $abir->say_my_name();

    // accessing the constant from outside of the class
    echo "Admin name (from outside of the class): ".Profile::ADMIN_NAME."</br>" ;

    // accessing the constant from inside of the class
    $abir->calling_constant_from_inside();

    // output : 
    // User Name is : Abir Rahman
    // Admin name (from outside of the class): Rasel
    // Admin name (from inside of the class) : Rasel

    // This class has been destroyed
?>