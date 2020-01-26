<?php
    require_once 'Matematicas.php';

    class Sumar extends Matematicas{
        public function sumar(){
            return ($this->getNum1() + $this->getNum2());
        }
    }
?>