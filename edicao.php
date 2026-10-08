<?php
require_once __DIR__ . "/init.php";

$eventoDetectado = false;
$eventoAtual = null;

if (isset($_GET['id'])) {

    $eventoDetectado = true;

    $eventoAtual = $_SESSION['eventos'][$_GET['id']];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAI - EVENTOS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>EDIÇÃO EVENTOS - SENAI</h1>
    <?php require_once __DIR__ . "/index.php" ?>

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

    <div class="menu">
         <?php if ($eventoDetectado): ?>
        <form action="cadastro.php" method="POST">
        <input type="text" name="id" id="id" value="<?= $_GET['id'] ?>" hidden required>
    </div>
    <hr>

    <div class="form">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $eventoAtual['titulo'] ?>" required>
    <br>

     <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao" value="<?= $eventoAtual['descricao'] ?>">
    <br>

         <label for="area">Área: </label>
        <input type="text" name="area" id="area" required>
    <br>

    <?php $data_recebida = $_POST['data_usuario'];
    $data_atual = date('Y/m/d :H:i:s');
    if ($data_recebida >= $data_atual) {
        echo $data_recebida;
    }
    ?>
    
        <label for="data">Data: </label>
        <input type="date" name="data" id="data" required>
    <br>

    <label for="inicio">Início :</label>
        <input type="number" name="inicio" id="inicio" required>
    <br>

    <label for="fim">Fim</label>
        <input type="number" name="fim" id="fim" required>
    <br>

        <label for="local">Local: </label>
        <input type="text" name="local" id="local" value="<?= $eventoAtual['local'] ?>" required>
    <br>

        <label for="responsavel">Responsável: </label>
        <input type="text" name="responsavel" id="responsavel" required>
    <br>

    <button type="submit" name="salvar">Salvar</button>
    </div>
    </form>

    <?php if (isset($_POST['salvar'])) {
        echo "<p>A edição foi realizada com sucesso!</p>";
    }
    ?>

</body>

</html>