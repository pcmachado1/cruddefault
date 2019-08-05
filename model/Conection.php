<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conection
 *
 * @author root
 */
class Conection{
    private $con;
    
    public function __construct() {
       

        
    }
    public function getConectionLocal() {
        
         try {
            $this->con = new PDO('mysql:host=localhost:3306;dbname=cruddefault;','root','NOVASENHA');
            return $this->con;
            
        } catch (PDOException $e) {
            echo "Erro ".$e->getMessage();
        }
        
    }
    public function getConectionRemote() {
        
         try {
            
            $this->con = new PDO('mysql:host=sql10.freemysqlhosting.net;dbname=sql10183260;','sql10183260','22ZGLBsEIx');
            return $this->con;
            
        } catch (PDOException $e) {
            echo "Erro ".$e->getMessage();
        }
        
    }
    public function getConectionSqlServer(){
        try {
            
            $this->con = new PDO('sqlsrv:Server=PAULOMACHADO-PC\SQLEXPRESS;Database=sistema;','deus','J@mes912');
            return $this->con;
            
        } catch (PDOException $e) {
            echo "Erro ".$e->getMessage();
        }
    }
    
    

}
