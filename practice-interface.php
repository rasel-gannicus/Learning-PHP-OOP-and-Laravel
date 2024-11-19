
<?php 
interface Animal{
    public function makeSound() ;
}

class Cats implements Animal {
    public function makeSound(){
        echo 'Meow <br />' ; 
    }
}

class Panda implements Animal {
    public function makeSound(){
        echo 'Vroom Vroom <br />' ; 
    }
}

class Tiger implements Animal {
    public function makeSound(){
        echo 'Grrrrrr <br />' ; 
    }
}

class Lion implements Animal {
    public function makeSound(){
        echo 'Lion Lion <br />' ; 
    }
}
$cat = new Cats() ;
$lion = new Lion ;
$tiger = new Tiger ; 

$lion->makeSound() ;
$tiger->makeSound() ;
$cat->makeSound() ;
?>

<?php 
    interface Country {
        public function country_of_origin() ;
    }

    class Audi implements Country {
        public function country_of_origin(){
            echo "Audi is from England" ; 
        }
    }

    class BMW implements Country {
        public function country_of_origin(){
            echo "BMW is from Saudi Arab" ;
        }
    }

    class lamborghini implements Country{
        public function country_of_origin(){
            echo "Lamborghini is from Italy" ;
        }
    }

    class ford implements Country{
        public function country_of_origin(){
            echo "Ford is American Muscle" ;
        }
    }

    class ferrari implements Country {
        public function country_of_origin(){
            echo "Ferrari is from Italy" ; 
        }
    }

    $audi = new Audi ;
    $bmw = new BMW ;
    $lamborghini = new lamborghini ; 
    $ford = new ford ;
    $ferrari = new ferrari ; 

    $CarsArray = array($audi, $bmw, $lamborghini, $ford, $ferrari) ; 

    foreach($CarsArray as $cars){
        $cars->country_of_origin() ;
        echo "<br />" ;
    }
 
?>