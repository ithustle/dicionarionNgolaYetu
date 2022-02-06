<?php

class Contador {
    
    public $data;
    public $ip;
    
    public function getData() {
        return $this->data = date("Y-m-d");
    }

    public function getIp() {
        return $this->ip = $_SERVER['REMOTE_ADDR'];
    }
    
    public function visitantesPagina(){
        
        $this->conexao = new Conexao();
        $sql = "INSERT INTO visitas (ip, datas) VALUES (:ip, :data)";
        $querySql = $this->conexao->prepare($sql);

        $querySql->bindValue(':ip', $this->getIp());
        $querySql->bindValue(':data', $this->getData());
        $querySql->execute();
    }
    
    public function contarVisitas(){
        
        $this->conexao = new Conexao();
        $sql = "SELECT * FROM visitas";
        $querySql = $this->conexao->query($sql);
        $registo = $querySql->fetchAll(PDO::FETCH_ASSOC);
        $numVisitas = count($registo);
        
        return $numVisitas;
    }
   



    
}

?>
