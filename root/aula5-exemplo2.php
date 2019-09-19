<?php

header("Content-type: text/html; charset=utf-8");

$salario = $_REQUEST["salario"];

echo "Salário informado: <b>$salario</b>";

    if($salario > 954.00){
    
        echo "<br />O Salário é maior que o Salário Mínimo";
    } 
    
    else{
    
        echo "<br />O Salário é menor que o Salário Mínimo";
    }
?>