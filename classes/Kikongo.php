<?php

require_once 'Linguas.php';

class Kikongo extends Linguas {
    
    public function traduzirKikongo(){
        
        $this->conexao = new Conexao();
        $sql = "SELECT kikongo FROM portugues_kikongo WHERE portugues = '{$this->getLingua()}'";
        $sqlResulte = $this->conexao->query($sql);
        $queryProce = $sqlResulte->fetchAll();
        
        return $queryProce;
    }
}

?>
