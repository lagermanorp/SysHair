<?php

    header("Content-type: text/html; charset=utf-8");

    $raio = $_GET["raio"];
    $pi = 3.14;
    $circunferencia = (2 * $pi) * $raio;
    $area = $pi * ($raio * $raio);

echo "A área do Círculo é $area Metros, e sua Circunferência é $circunferencia Metros.";