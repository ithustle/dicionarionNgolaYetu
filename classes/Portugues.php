<?php

require_once '../classes/Linguas.php';

class Portugues extends Linguas {
    
    public function traduzirPortugues_Kikongo(){
        
        $this->conexao = new Conexao();
        $sql = "SELECT Portugues FROM  portugues_kikongo WHERE Kikongo = '{$this->getLingua()}'";
        $exe = $this->conexao->query($sql);
        $resultado = $exe->fetchAll();
        
        return $resultado;
        
    }
    
    public function traduzirPortugues_Umbundo(){
        
        $this->conexao = new Conexao();
        $sql = "SELECT Portugues FROM portugues_umbundo WHERE Umbundo = '{$this->getLingua()}'";
        $exe = $this->conexao->query($sql);
        $resultado = $exe->fetchAll();
        
        return $resultado;
        
    }
    
}

?>
