<?php

    require_once "init.php";




?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>
<body>
    <header>
        <h1>Eventos senai</h1>
        <nav>
            <a href="detalhes.php">Detalhar</a>
            <a href="edicao.php">Editar</a>
            <a href="remocao.php">Remover</a>  
            <a href="cadastro.php">Cadastrar</a>
        </nav>
    </header>
    <main>
        <div>
        <?php foreach($_SESSION['eventos'] as $chave => $valor)
            {
                print "
                <h1>{$valor['titulo']}</h1>
                <h2>Área:{$valor['area']}</h2>
                <h2>Data do evento:{$valor['data']}</h2>
                <h2>Local do evento:{$valor['local']}</h2>
                <h2>Ínicio:{$valor['inicio']}</h2>
                <h2>Fim:{$valor['fim']}</h2>
                <h2>Responsavel:{$valor['responsavel']}</h2>
                <h3>{$valor['descricao']}</h3>
                <h4>Id:{$valor['id']}</h4>
                ";

            }
        ?> 
        </div>
        
    </main>
    <footer>

    </footer>
    
</body>
</html>