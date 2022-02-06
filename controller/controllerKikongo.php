<?php

require_once '../classes/Conexao.php';
require_once '../classes/Linguas.php';

$lingua = new Linguas();
$port = $_GET['pesquisa'];

$lingua->setLingua($port);

foreach ($lingua->traduzirKikongo() as $kikongo){
    
    $kikongoR = $kikongo['kikongo'];
}

return $kikongoR;



?>
