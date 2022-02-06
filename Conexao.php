<?php

class Conexao extends PDO {
    
    private $dsn = 'mysql:host=localhost; dbname=dicionario_nacional';
    private $user = 'root';
    private $pass = '';
    private $cnn;
    
    public function __construct() {
        try {
            
            if ($this->cnn == NULL){
                
                $cnn = parent::__construct($this->dsn, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                $this->handle = $cnn;
                
                return $this->handle;
            }
            
        } catch (PDOException $exc) {
            
            throw new Exception ("Mensagem: ". $exc->getMessage(). "Código de erro: ". $exc->getCode());
            return FALSE;
        }
    }
    
}
?>
