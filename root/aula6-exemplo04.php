<?php

    header("Content-type: text/html; charset=utf-8");

    $Y = $_REQUEST["numero"];

    do
        {
        echo "O valor de Y é: $Y<br/>";
        //Y--;
        $Y = $Y - 1;
    } while ($Y > 0);

?>