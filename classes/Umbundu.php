<?php

require_once 'Linguas.php';

class Umbundu extends Linguas {
    
    public function traduzirUmbundu(){
        
        $this->conexao = new Conexao();
        $sql = "SELECT Umbundo FROM portugues_umbundo WHERE Portugues = '{$this->getLingua()}'";
        $sqlResulte = $this->conexao->query($sql);
        $queryRes = $sqlResulte->fetchAll();
            
        return $queryRes;
    }
}

?>
