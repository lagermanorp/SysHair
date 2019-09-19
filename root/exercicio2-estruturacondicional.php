<?php

header("Content-type: text/html; charset=utf-8");

$num1 = $_REQUEST["num1"];
$num2 = $_REQUEST["num2"];
    if($num1 != $num2){
        $media = ($num1 + $num2) / 2;
        $produto = ($num1 * $num2);
        
        echo "<br /> Os números <b>$num1</b> e <b>$num2</b> são diferentes e sua Média é: <b>$media</b> e seu Produto é: <b>$produto</b>.";
    }
    else{
        echo "Os números <b>$num1</b> e <b>$num2</b> são iguais, portanto não serão calculados sua média e seu produto.";
    }
?>