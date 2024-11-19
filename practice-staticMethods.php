
<?php 
    class Car {
        public static function say_my_name(){
            echo "Say my name " ;
        }
    }

    Car::say_my_name()
?>

<?php 
    error_reporting(E_ALL) ;
    ini_set('display_errors', 1) ;

    class animal {
        public static function makeSound(){
            echo "Cat make sound Meow";
        }

        public function __construct(){
            self::makeSound() ;
        }
    }
    new animal() ;
?>