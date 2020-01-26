<?php
    require_once 'Sumar.php';
    require_once 'Resta.php';
    require_once 'Multiplicar.php';
    require_once 'Division.php';

    sleep(2);

    $objSuma = new Sumar();
    $objResta = new Resta();
    $objMultiplicar = new Multiplicar();
    $objDivision = new Division();
    

    $num1 = $_POST["txtnumero1"];
    $num2 = $_POST["txtnumero2"];

    if (isset($_POST["btnsumar"])) {
        $objSuma->setNum1($num1);
        $objSuma->setNum2($num2);
        echo $objSuma->sumar();
    }
    
    if (isset($_POST["btnrestar"])) {
        $objResta->setNum1($num1);
        $objResta->setNum2($num2);
        echo $objResta->restar();
    }

    if (isset($_POST["btnmultiplicar"])) {
        $objMultiplicar->setNum1($num1);
        $objMultiplicar->setNum2($num2);
        echo $objMultiplicar->multiplicar();
    }

    if (isset($_POST["btndividir"])) {
        $objDivision->setNum1($num1);
        $objDivision->setNum2($num2);
        echo $objDivision->division();
    }
?>