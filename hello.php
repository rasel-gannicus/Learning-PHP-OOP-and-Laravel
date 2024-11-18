<?php 
    class Cars {
        // properties
        public $brand ;
        public $model ; 
        public $country ; 

        // methods 
        function setBrand($trailBrand){
            $this->brand = $trailBrand ;
        }
        function getBrand(){
            return $this->brand ;
        }

    }

    $audi = new Cars() ; 
    $bmw = new Cars() ; 

    $bmw->setBrand('Range Rover');
    $audi->setBrand('Audi') ; 

    echo 'Brand Name : '.$audi->getBrand() ; 
    echo '<br>' ;
    echo 'Brand Name : '.$bmw->getBrand() ;
?>

