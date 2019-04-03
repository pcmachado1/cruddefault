<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Queryes
 * Classe para definição de queryes. 
 * @author Paulo Machado
 */

class Queryes {
    private $query;
    
    function __construct() {
        
    }
    
    public function atualizarPerfil(Usuario $usuario) {
        $this->query = "UPDATE usuario set nome = '".$usuario->getNome().
                        "' , sobrenome = '".$usuario->getSobrenome().
                        "' , email = '".$usuario->getEmail().
                        "' where id = ".$usuario->getId()." ";
        return $this->query;
    }
    
    public function novoCadastro(Usuario $usuario) {
        $this->query = "INSERT INTO usuario (nome,sobrenome,email) values ".
                    "('".$usuario->getNome().
                    "','".$usuario->getSobrenome().
                    "','".$usuario->getEmail()."');";
        
        return $this->query;
    }
    
    public function listarUsuariosSimples() {
        $this->query = "SELECT * FROM usuario";
        
        return $this->query;
    }
    
    public function deletarUsuario(Usuario $usuario) {
        $this->query = "DELETE FROM usuario WHERE id=".$usuario->getId()."";
        
        return $this->query;
    }
    
}
