<?php

header("Content-type: text/html; charset=utf-8");

$numero = $_REQUEST["numero"];

$modulo = $numero % 2;

echo "Número informado: <b>$numero</b>";

    if($modulo == 0){
    
        echo "<br />O Número digitado é par";
    } 
    
    else {
    
        echo "<br />O Número digitado é ímpar";
    }
?>