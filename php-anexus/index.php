<?php

require 'config.php';

$sql = $pdo->query('SELECT * FROM usuarios');
$datas = [];
    if($sql->rowCount() > 0) {
        $datas = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Anexus Chalenge</title>
</head>
<body>
    <div class="container">


        <a href="./adicionar.php">Adicionar Usuario</a>

        <table border='1' width="100%">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>PONTOS</th>
                <th>AÇÕES</th>
            </tr>
            <?php
            foreach($datas as $usuario): ?>
            <tr>
                <td><?=$usuario['id'] ?></td>
                <td><?=$usuario['nome'] ?></td>
                <td><?=$usuario['pontos'] ?></td>
                <td class="edit">
                    <a href="editar.php?id=<?=$usuario['id']?>">[ Editar ]</a>
                    <a href="excluir.php?id=<?=$usuario['id']?>" onclick="return confirm('Tem certeza que deseja excluir usuario?')">[ Excluir ]</a>
                </td>
            </tr>
            <?php endforeach; ?>

        </table>
     </div>
</body>
</html>
