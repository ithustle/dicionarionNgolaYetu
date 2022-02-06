<?php

    $palavra = $_GET['pesquisa'];
    $resposta = "";
   
    $verbo = substr($palavra, -1);
    
    if ($verbo == 'r'){
        return $resposta = "Verbo";
    }
    
    $substantivo1 = substr($palavra, -3);
    $substantivo2 = substr($palavra, -1);
    
    if ($substantivo1 == 'nte' || $substantivo2 == 'o' || $substantivo2 == 'a'){
        return $resposta = "Substantivo";
    }
   
    
?>
