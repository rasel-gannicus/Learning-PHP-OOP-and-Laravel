<?php 
    class Cars {
        public $brand ;
        public $model ;

        function __construct($sayMyName){
            $this->brand = $sayMyName ;
        }
    }

    $audi = new Cars('Mercedez') ;
    echo 'Brand : '.$audi->brand ;
?> 