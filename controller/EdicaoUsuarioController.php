<?php

include '../config.php';

$usuario = new Usuario();

$usuario->setId($_POST['id']);
$usuario->setNome($_POST['nome']);
$usuario->setSobrenome($_POST['sobrenome']);
$usuario->setEmail($_POST['email']);

$conexao = new ConectionFactory();

$query = new Queryes();

try {
    $result = $conexao->getConectionSqlServer()->query($query->atualizarPerfil($usuario));
    
    $result->fetchAll();
    
} catch (PDOException $exc) {
    
    echo $exc->getMessage();
    
}   

  
    
    

