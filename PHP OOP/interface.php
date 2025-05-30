
<?php 
    interface make_sound{};
    interface has_car{} ; 

    class Dog implements make_sound {
        public function make_sound(){
            echo "Dog says : woof woof" ;
            echo "</br>" ;
        }
        public function __construct(){
            $this->make_sound() ; 
        }
        
    }

    class Cat implements make_sound{
        public function make_sound(){
            echo "Cat says : meow meow" ;
            echo "</br>" ;
        }
        public function __construct(){
            $this->make_sound();
        }
    }

    class Human implements make_sound, has_car{
        public function make_sound(){
            echo "Hello World" ;
            echo "</br>" ;
        }
        public function has_car(){
            echo "Human can have car " ; 
            echo "</br>" ;
        }

        public function __construct(){
            $this->make_sound() ; 
            $this->has_car() ;
        }
    }

    $lalu = new Dog() ;
    $kalu = new Cat() ;
    $rasel = new Human() ;
?>