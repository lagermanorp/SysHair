<?php

header("Content-type: text/html; charset=utf-8");

    echo "Soma dos números pares existentes entre os 2 valores lidos";

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    
    $soma = 0;

    for($v = $num1+1; $v < $num2; $v++){
        
        //Expressão Ternária = IF em linha
        //$soma += ($v % 2 == 0 ? $v : 0);
        //OU
        if ($v % 2 == 0){
            $soma += $v;
        }
    }
    echo "<br /><br /><br />A Soma dos valores pares entre $num1 e $num2 é: $soma";

?>

 


