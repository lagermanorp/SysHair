<?php

header("Content-type: text/html; charset=utf-8");

$nome1 = $_REQUEST["nome1"];

$nome2 = $_REQUEST["nome2"];

echo "O primeiro nome é: <b>$nome1</b><br>";

echo "O segundo nome é: <b>$nome2</b>";

    if($nome1 == $nome2){
    
        echo "<br />Os nomes informados são iguais";
    } 
    
    else{
    
        echo "<br />Os nomes informados são diferentes";
    }
?>