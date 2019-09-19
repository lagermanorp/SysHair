<?php

    header("Content-type: text/html; charset=utf-8");

    $vetor = array("a","b","c","d","e");
    foreach ($vetor as &$item)
        {
        
        echo "<br />O Valor do Item é: $item";
        
        }
?>