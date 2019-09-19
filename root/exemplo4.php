<?php

    header("Content-type: text/html; charset=utf-8");

    $x = $_GET["x"];
    $y = $_GET["y"];
    $resultado = $x + $y;

echo "A soma dos dois números é igual a: $resultado";

?>
