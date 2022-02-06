<?php

    $palavra = $_GET['pesquisa'];
    $letras = array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","y","x","z", 
                    "B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","W","Y","X","Z");

    $vogais = str_replace($letras, "", $palavra);
    return $vogais;
    
?>
