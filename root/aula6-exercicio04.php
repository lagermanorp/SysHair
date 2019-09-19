<?php

     header("Content-type: text/html; charset=utf-8");

    $h = array(10,20,35,48,19,76,99);
    
    //Escrever na sequencia
    echo "Valores do Vetor H em sequência: <br />";
        foreach ($h as $num){
            echo "$num,";
        }
        echo "<br />";
        echo "<br />";
    
    //Escrever na ordem inversa
    echo "Valores do Vetor H em ordem inversa: <br />";
        for ($i = 6; $i >= 0; $i--){
            echo "$h[$i],";
            }
?>