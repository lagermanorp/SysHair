<?php

header("Content-type: text/html; charset=utf-8");

$mes = $_REQUEST["mes"];

switch ($mes) {
        
        case 1;
            echo "<b>Você nasceu em Janeiro</b>";
            break;
        
        case 2;
            echo "<b>Você nasceu em Fevereiro</b>";
            break;
        
        case 3;
            echo "<b>Você nasceu em Março</b>";
            break;
        
        case 4;
            echo "<b>Você nasceu em Abril</b>";
            break;
        
        case 5;
            echo "<b>Você nasceu em Maio</b>";
            break;
        
        case 6;
            echo "<b>Você nasceu em Junho</b>";
            break;
        
        case 7;
            echo "<b>Você nasceu em Julho</b>";
            break;
        
        case 8;
            echo "<b>Você nasceu em Agosto</b>";
            break;
        
        case 9;
            echo "<b>Você nasceu em Setembro</b>";
            break;
        
        case 10;
            echo "<b>Você nasceu em Outubro</b>";
            break;
        
        case 11;
            echo "<b>Você nasceu em Novembro</b>";
            break;
        
        case 12;
            echo "<b>Você nasceu em Dezembro</b>";
            break;
        
        default;
            echo "<b>Mês Inválido</b>";
            break;
}

?>