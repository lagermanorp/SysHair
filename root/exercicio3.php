<?php

     header("Content-type: text/html; charset=utf-8");

    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $anocasamento = $_GET["anocasamento"];
    $idadecasamento = ($idade - (2019 - $anocasamento));

echo "$nome, você tinha $idadecasamento quando se casou em $anocasamento.";

?>