<?php

    header("Content-type: text/html; charset=utf-8");

    $a = array(10,15,20,25,30,35,40);
    $soma = 0;
    $mult = 1;
    //Escrever a soma dos valores do vetor
    
    for ($i = 0; $i < 7; $i++){
        $soma += $a[$i];
        $mult *= $a[$i];
    }
    echo "A soma dos valores do Vetor A é igual: $soma<br />";
    echo "A Multiplicação entre os valores do Vetor A é igual: $mult<br />";
    echo "<br />";
    echo "<br />";

    // usando foreach
    $soma = 0;
    $mult = 1;
    foreach ($a as $num){
        $soma += $num;
        $mult *= $num;
    }


?>