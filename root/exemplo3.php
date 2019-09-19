<?php

    header("Content-type: text/html; charset=utf-8");

    $nome = $_GET["nome"];
    $cidade = $_GET["cidade"];
    $bairro = $_GET["bairro"];

    echo "O bichinha do $nome mora na $cidade no bairro $bairro";

?>