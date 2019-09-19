<?php

header("Content-type: text/html; charset=utf-8");

$numero = $_REQUEST["numero"];
    if($numero > 10){
        echo "<br /> O número <b>$numero</b> é maior que 10";
    }
?>