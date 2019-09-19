<?php

header("Content-type: text/html; charset=utf-8");

$num1 = $_REQUEST["num1"];

$num2 = $_REQUEST["num2"];

echo "O primeiro número digitado é: <b>$num1</b><br>";

echo "O segundo número digitado é: <b>$num2</b>";

    if($num1 > $num2){
    
        echo "<br />O maior número é: <b>$num1</b>";
    } 
    
    else if($num1 < $num2){
    
        echo "<br />O maior número é: <b>$num2</b>";
    }

    else{
        
        echo "<br />Os números são iguais";
    }
?>