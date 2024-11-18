<?php
    class PostOffice {
        public $division ; 
        public $district ; 
    }

    class Flower {
        public $name ;
        public $color ;
    }

    $bhandaria = new PostOffice() ;

    echo 'Practicing InstanceOf <br>' ; 

    $bhandaria->division = 'Barisal' ;
    echo 'Division : '.$bhandaria->division ;

    echo '<br>' ;
    echo 'Checking if the $bhandaria is an instance of Flower class. <br>' ;
    var_dump($bhandaria instanceof Flower) ;  // suppose to return 'false' ;
?>