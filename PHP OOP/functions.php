<?php 
    // echo 'Hello World' ;
    class calculate {
        public function add($num1, $num2){
            $z = $num1 + $num2 ; 
            echo ("Summation is : ". $z."</br>");
            return ; 
        }

        public function sub($num1, $num2){
            echo ("Substraction is : ".$num1 - $num2."</br>" );
            return ; 
        }

        public function multi($num1, $num2){
            echo ("Multiplication is : " . $num1 * $num2."</br>") ;
            return;
        }

        public function division($num1, $num2){
            echo ("Division is : ".$num1 / $num2."</br>") ; 
        }

        // --- if you want to do all the things at once
        public function all($num1, $num2){
            $this->add($num1, $num2);
            $this->sub($num1, $num2);
            $this->multi($num1, $num2);
            $this->multi($num1, $num2);
        }
    }
?>