<?php

    abstract class Animal {
        public $name ;
        public $animal_type ; 
        public function __construct($animal_type, $theName)   
        {
            $this->name = $theName ;
            echo "Hello I am a : ".$animal_type ;
            echo"</br>";
        }
        public function say_my_name(){
            echo "My name is : ".$this->name;
            echo "</br>" ;
        }

        abstract public function make_sound($sound);
    }

    class Dog extends Animal{
        public function make_sound($sound)
        {
            echo "I make sound : ".$sound;
            echo "<br>";
        }
    } ;

    class Cat extends Animal {
        public function make_sound($sound){
            echo "I don't make sound like dog. I just say : ".$sound;
        }
    }

    $dog = new Dog('Dog', 'Lalu') ;
    $dog->say_my_name();
    $dog->make_sound('woof woof');

    $cat = new Cat('Cat','Kalu') ;
?>