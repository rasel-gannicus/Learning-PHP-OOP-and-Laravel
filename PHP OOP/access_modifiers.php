<?php 
    class Profile{
        public $name = "Rasel";
        protected $email = "rasel@gmail.com" ;
        private $password = 12345 ;

        public function testing_property_from_parent_class(){
            echo "Name from parent Class : ".$this->name;
            echo "<br>" ; 
            echo "Email from Parent Class :".$this->email ;
            echo "<br>" ; 
            echo "Password from parent Class : ".$this->password ; //it will generate error as this property is private. this property will be accessible from parent class only
            echo "<br/> <br/>" ;
        }
    }

    class Admin extends Profile{
        public function testing_property_from_subclass(){
            echo "Name from parent Class : ".$this->name;
            echo "<br>" ; 
            echo "Email from Parent Class :".$this->email ;
            echo "<br>" ; 
            echo "Password from parent Class : ".$this->password ; //it will generate error as this property is private. this property will be accessible from parent class only

        }
    }

    $rasel = new Profile() ;
    $rasel->testing_property_from_parent_class();

    // now testing 'access modifiers' from subclass 
    $abir = new Admin();
    $abir->testing_property_from_subclass();

    // output : 
    // Name from parent Class : Rasel
    // Email from Parent Class :rasel@gmail.com
    // Password from parent Class : 12345

    // Name from parent Class : Rasel
    // Email from Parent Class :rasel@gmail.com

    // Warning: Undefined property: Admin::$password in /Users/shafiqulhasanrussell/Downloads/Side Projects/Learning-PHP-OOP-and-Laravel/PHP OOP/access_modifiers.php on line 23
    // Password from parent Class :
?>