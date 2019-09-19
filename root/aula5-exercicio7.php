<?php

header("Content-type: text/html; charset=utf-8");

$nota1 = $_REQUEST["nota1"];
$nota2 = $_REQUEST["nota2"];
$nota3 = $_REQUEST["nota3"];

echo "A primeira nota informada é: <b>$nota1</b><br>";

echo "A segunda nota informada é: <b>$nota2</b><br>";

echo "A terceira nota é: <b>$nota3</b><br>";

    $ma = ($nota1 + $nota2 + $nota3) / 3;
    
    if($ma >= 6) {
        
        echo "<br />A sua média é <b>$ma</b> e você foi <b>Aprovado</b>";
    }
    
    else {
    
        echo "<br />A sua média é <b>$ma</b> e você foi <b>Reprovado</b>";
    }
    
?>