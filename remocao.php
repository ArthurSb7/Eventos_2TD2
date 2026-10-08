<?php
require_once "init.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleção - Eventos SENAI</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="">
        <div class="">
            <h1>eventos senai</h1>
        </div>
        <div class="opcNav">
            <nav>
                <a href="detalhes.php">Detalhar</a>
                <a href="edicao.php">Editar</a>
                <a href="remocao.php">Remover</a>  
                <a href="cadastro.php">Cadastrar</a>
            </nav>
        </div>
    </header>
        <nav>
        <a href="detalhes.php">Detalhar</a>
        <a href="edicao.php">Editar</a>
        <a href="remocao.php">Remover</a>  
        <a href="cadastro.php">Cadastrar</a>
        </nav>

    <ul>
        <?php
        foreach ($_SESSION['eventos'] as $chave => $valor) {
            print "<li>
            <a href='deletar.php?id={$chave}'>
                {$valor['titulo']}
            </a>    
        </li>";
        }
        ?>
    </ul>
    <?php if (isset($_GET['id'])): ?>
        <?php
    $id = $_GET['id'];
    $eventoAtual = $_SESSION['eventos'][$id];
    ?>
    <h2>Deseja excluir este evento?</h2>
    <p>
        <strong><?= $eventoAtual['titulo'] ?></strong>
    </p>

    <form action="processaRemocao.php" method="POST">

        <input type="hidden" name="id" value="<?= $id ?>">

        <button type="submit">Excluir Evento</button>

        </form>
    <?php else: ?>
        <p>Nenhum evento selecionado.</p>
        <p>Por favor, selecione uma das opções acima;</p>
    <?php endif; ?>
</body>

</html>