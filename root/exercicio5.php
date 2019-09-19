<?php

    header("Content-type: text/html; charset=utf-8");

    $baseTri = $_GET["baseTri"];
    $alturaTri = $_GET["alturaTri"];
    $areaTri = ($baseTri * $alturaTri) / 2;

echo "A área do Triângulo é $areaTri Metros.";

?>