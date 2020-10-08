<?php 

require 'config.php';

$nome = filter_input(INPUT_POST,'nome');
$pontos = filter_input(INPUT_POST,'pontos');

if($nome & $pontos){
    $sql = $pdo->prepare('INSERT INTO usuarios (nome,pontos) VALUES (:nome, :pontos)');
    $sql->bindValue('nome',$nome);
    $sql->bindValue('pontos',$pontos);
    $sql->execute();

    header('Location: index.php');
    exit;
}



?>