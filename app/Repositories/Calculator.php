<?php 
    namespace App\Repositories;

    class Calculator{
        public function sum($number1 = 0, $number2 = 0){
            return $number1 + $number2;
        }

        public function substract($number1 = 0, $number2 = 0){
            return $number1 - $number2;
        }
    }
?>
