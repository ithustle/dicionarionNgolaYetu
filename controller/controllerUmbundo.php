<?php

require_once '../classes/Conexao.php';
require_once '../classes/Linguas.php';

$lingua = new Linguas();
$port = $_GET['pesquisa'];

$lingua->setLingua($port);

$umbundo = $lingua->traduzirUmbundu();

?>
