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
        <h1>Adicione um novo usuario</h1>

        <form action="adicionar_action.php" method="POST">

            <label for="Nome">
            Nome
            <input type="text" name="nome" />

            </label>

            <label for="pontos">

            Pontos
            <input type="text" name="pontos">

            </label>

            <input type="submit" value="Enviar">

        </form>
    </div>
</body>
</html>



