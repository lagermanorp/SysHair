<?php

     header("Content-type: text/html; charset=utf-8");

    $numero = $_GET["numero"];
    $resto = $numero % 2;

echo "O resto da divisão de $numero por 2 é $resto.";

?>