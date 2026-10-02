<?php
require_once 'init.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIÇÃO</title>
</head>
<body>
    <h1>Edição de evento</h1>
      <?php require_once __DIR__ . "/nav.php" ?> <hr>

<ul>
    <?php
        foreach ($_SESSION['eventos'] as $chave => $valor) {
            print "<li> 
        <a href='formEdicao.php?id={$chave}'> {$valor['titulo']} </a> </li>";
        }
        if ($_SESSION['eventos'] == null) {
            echo ("Desculpe, não encontramos nenhum evento!");
        }
        ?>
</ul>

    <form action="processaEdicao.php" method="POST">
    <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $eventoAtual['titulo'] ?>" required>


    <button type="submit" name="alterar">Alterar</button>

    </form>


</body>
</html>