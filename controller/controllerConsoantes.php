<?php

    $palavra = $_GET['pesquisa'];
    $letras2 = array("a","e","i","o","u", "A","E","I","O","U");
    
    $consoantes = str_replace($letras2, "", $palavra);
    return $consoantes;
    
?>
