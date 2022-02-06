<?php

class Linguas {
    
    private $lingua;
    
    public function getLingua() {
        return $this->lingua;
    }

    public function setLingua($lingua) {
        $this->lingua = $lingua;
    }
    
    public function linguaPortuguesa(){
        
        $this->conexao = new Conexao();
        $sql = "SELECT portgues FROM portugues WHERE portgues LIKE '%{$this->getLingua()}%' limit 5";
        $sqlResulte = $this->conexao->query($sql);
        $queryProce = $sqlResulte->fetchAll();
        
        return $queryProce;
    }
   
}

?>
    