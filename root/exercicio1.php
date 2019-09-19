<?php

    header("Content-type: text/html; charset=utf-8");

    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $altura = $_GET["altura"];

    echo "$nome, você está com $idade e já tem $altura de altura! Parabéns!!!";

?>