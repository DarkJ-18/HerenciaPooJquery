<?php

class Matematicas{
private $num1;
private $num2;

   public function __construct(){
       $this->num1 = 0;
       $this->num2 = 0;
   }

    protected function getNum1(){
        return $this->num1;
    }

    public function setnum1($valor){
        $this->num1 = $valor;
    }

    protected function getNum2(){
        return $this->num2;
    }

    public function setnum2($valor){
        $this->num2 = $valor;
    }


}

?>
