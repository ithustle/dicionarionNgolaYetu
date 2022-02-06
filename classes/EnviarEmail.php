<?php


class EnviarEmail {
    
    private $dataActual;
    private $mensagem;
    private $header;
    
    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    public function getHeader() {
        return $this->header;
    }

    public function setHeader($header) {
        $this->header = $header;
    }

    public function getDataActual() {
        return $this->dataActual;
    }

    public function setDataActual($dataActual) {
        $this->dataActual = $dataActual;
    }
    
    public function emailEnviado(){
        
        $this->conexao = new Conexao();
        $sql = "UPDATE envio SET datas = '{$this->getDataActual()}' WHERE id = 1";
        $executa = $this->conexao->prepare($sql);
        $executa->execute();
        mail ("cgarcia@bccl-ao.com", "Relatório de Semanal de Acessos",  $this->getMensagem() , $this->getHeader());
        
        return $executa;
    }

    public function enviarEmail(){
        
        $this->conexao = new Conexao();
        $sql = "SELECT DISTINCT datas, count(datas) as visitas from visitas where datas BETWEEN day(datas) - 7 AND '{$this->getDataActual()}' GROUP BY datas";
        $pr = $this->conexao->query($sql);
        $resultado = $pr->fetchAll();

        return $resultado;
    }
    
    public function verficarEnvio(){
        
        $this->conexao = new Conexao();
        $sql = "SELECT datas FROM envio";
        $execute = $this->conexao->query($sql);
        $resultado = $execute->fetchAll();
        
        return $resultado;
    }
    
    
}

?>
