<?php 
    class Animal {
        public function make_sound(){
            echo "Hello I am Human";
            echo "</br>";
        }
    }

    class Dog extends Animal{
        public function make_sound()
        {
            echo "woof woof !";
            echo "</br>" ;
        }
    }

    class Cat extends Animal {
        public function make_sound()
        {
            echo "meow meow !" ;
            echo "</br>" ; 
        }
    }

    $human = new Animal() ; 
    $dog = new Dog() ;
    $cat = new Cat() ; 

    $human->make_sound();
    $dog->make_sound();
    $cat->make_sound();
?>