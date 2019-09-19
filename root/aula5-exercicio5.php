<?php

header("Content-type: text/html; charset=utf-8");

$lado1 = $_REQUEST["lado1"];

$lado2 = $_REQUEST["lado2"];

$lado3 = $_REQUEST["lado3"];


echo "O primeiro lado é: <b>$lado1</b><br>";

echo "O segundo lado é: <b>$lado2</b><br>";
    
echo "O terceiro lado é: <b>$lado3</b>";

    if(($lado1 == $lado2) && ($lado2 == $lado3)) {
        
        echo "<br />O triângulo é Equilátero";
    }

    else if(($lado1 != $lado2) && ($lado2 != $lado3) && ($lado1 != $lado3)) {
        
        echo "<br />O triângulo é Escaleno";
    }

    else {
        
        echo "<br />O triângulo é Isósceles";
    }

?>