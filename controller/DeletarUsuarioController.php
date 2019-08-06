<?php

include '../config.php';

$usuario = new Usuario();

$conexao = new ConectionFactory();

$query = new Queryes();

$usuario->setId($_POST['id']);

try {
    $result = $conexao->getConectionPostgresql()->query($query->deletarUsuario($usuario));
    
    $result->fetchAll();
    
} catch (PDOException $exc) {
    
    echo $exc->getMessage();
    
}
