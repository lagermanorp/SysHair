<?php

    header("Content-type: text/html; charset=utf-8");

    $base = $_GET["base"];
    $altura = $_GET["altura"];
    $area = $base * $altura;

echo "A área do Retângulo é $area metros.";

?>