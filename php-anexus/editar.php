<?php

require 'config.php';

$info = [];
$id = filter_input(INPUT_GET,'id');

if($id){
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
    $sql->bindValue('id',$id);
    $sql->execute();


        if($sql->rowCount() > 0) {
            $info = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            header('Location: index.php');
            exit;
        }
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Anexus Challenge</title>
</head>
<body>
    <div class="container">

        <a href="index.php">Voltar</a>

        <h1>Edições</h1>

        <form action="editar_action.php" method="POST">

            <input type="hidden" name="id" value="<?=$info['id']?>" />

            <label for="Nome">
            Nome
            <input type="text" name="nome" value="<?=$info['nome']?>" />

            </label>

            <label for="pontos">

            Pontos
            <input type="text" name="pontos" value="<?=$info['pontos']?>" />

            </label>

            <input type="submit" value="Enviar">

        </form>
    </div>
</body>
</html>

