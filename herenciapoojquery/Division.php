<?php
    class Division extends Matematicas{
        public function division(){
            if ($this->getNum1() && $this->getNum2() > 0 ) {
                return ($this->getNum1() / $this->getNum2());
            }
        }
    }

    
?>

