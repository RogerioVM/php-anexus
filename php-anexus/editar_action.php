<?php 

require 'config.php';

$id = filter_input(INPUT_POST,'id');
$nome = filter_input(INPUT_POST,'nome');
$pontos = filter_input(INPUT_POST,'pontos');

if($id & $nome & $pontos){

    
    $sql = $pdo->prepare('UPDATE usuarios SET nome = :nome, pontos = :pontos WHERE id = :id');

    $sql->bindValue('id',$id);
    $sql->bindValue('nome',$nome);
    $sql->bindValue('pontos',$pontos);
    $sql->execute();

    header('Location: index.php');
    exit;
}



?>