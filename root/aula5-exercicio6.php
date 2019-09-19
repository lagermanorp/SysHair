<?php

header("Content-type: text/html; charset=utf-8");

$nome = $_REQUEST["nome"];

$idade = $_REQUEST["idade"];

echo "O nome informado é: <b>$nome</b><br>";

echo "e sua idade é: <b>$idade</b><br>";
    
    if($idade <= 18) {
        
        echo "<br /><b>$nome</b>, você é menor de 18 anos!!!";
    }

        else {
        
        echo "<br /><b>$nome</b>, você é maior de 18 anos, já pode dirigir e é obrigado a votar!!!";
    }

?>