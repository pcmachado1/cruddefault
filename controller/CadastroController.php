<?php

include '../config.php';

$usuario = new Usuario();
$usuario->setNome($_POST['nome']);
$usuario->setSobrenome($_POST['sobrenome']);
$usuario->setEmail($_POST['email']);

$conexao = new ConectionFactory();

$query = new Queryes();

try {
    $result = $conexao->getConectionLocal()->query($query->novoCadastro($usuario));
    
    $result->fetchAll();
    
} catch (PDOException $exc) {
    
    echo $exc->getMessage();
    
}   
    
    

