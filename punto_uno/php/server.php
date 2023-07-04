<?php

include"../index.html";

$numero1=null;
$numero2=null;
$operacion=null;
$resultado=null;

//isset=revisar que no hayan null
if(isset($_POST['numero1'])and isset($_POST['numero2'])and isset($_POST['operacion'])){
    $numero1=$_POST['numero1'];
    $numero2=$_POST['numero2'];
    $operacion=$_POST['operacion'];

    switch($operacion){
        case"suma":
            $resultado=$numero1+$numero2;
            echo"El resultado de la operacion $operacion es $resultado";
            break;
        case"resta":
            $resultado=$numero1-$numero2;
            echo"El resultado de la operacion $operacion es $resultado";
            break;
        case"multiplicacion":
            $resultado=$numero1*$numero2;
            echo"El resultado de la operacion $operacion es $resultado";
            break;
        case"division":
            if($numero2==0){
                echo"El resultado es indefinido, ingrese un valor diferente a 0";
            }
            else{
                $resultado=$numero1/$numero2;
                echo"El resultado de la operacion $operacion es $resultado";
            }
            break;
        default:
        echo"Seleccione una operacion valida";
        break;
    }
}