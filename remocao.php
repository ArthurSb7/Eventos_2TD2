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
    <title>REMOÇÃO NOTÍCIAS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>REMOÇÃO NOTÍCIAS</h1>
    <?php require_once __DIR__ . "/nav.php" ?> <hr>

    <ul>
        <?php
        foreach ($_SESSION['eventos'] as $chave => $valor) {
            print "<li> 
       <a href='remocao.php?id={$chave}'> {$valor['titulo']} </a> </li>";
        }
        if($_SESSION['eventos'] == null){
            echo ("Desculpe, não encontramos nenhum evento!");
        }
        ?>
    </ul>
 

    <div class="menu">
        <?php if ($eventoDetectado): ?>
            <form action="processaRemocao.php" method="POST">
                <input type="text" name="id" id="id" value="<?= $_GET['id'] ?>" hidden>
    </div>
    <hr>


    <div class="form">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $eventoAtual['titulo'] ?>" required>
    </div>
    <br>

      <div class="form">
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao" value="<?= $eventoAtual['descricao'] ?>" required>
    </div>
    <br>

  <div class="form">
        <label for="area">Categoria</label>
        <input type="text" name="area" id="area" value="<?= $eventoAtual['area'] ?>" required>
    </div>
    <br> 

     <div class="form">
        <label for="inicio">Início: </label>
        <input type="text" name="inicio" id="inicio" value="<?= $eventoAtual['inicio'] ?>" required>
    </div>
    <br>

    <div class="form">
        <label for="fim">Fim: </label>
        <input type="text" name="fim" id="fim" value="<?= $eventoAtual['fim'] ?>" required>
    </div>
    <br>    
   
    <div class="form">
        <label for="local">Localização: </label>
        <input type="text" name="local" id="local" value="<?= $eventoAtual['local'] ?>" required>
    </div>
    <div class="form">
        <label for="Responsavel">Responsável: </label>
        <input type="text" name="Responsavel" id="Responsavel" value="<?= $eventoAtual['Responsavel'] ?>" required>
    </div>

    <br>

     <!-- <?php $data_recebida = $_POST['data_usuario'];
            $data_atual = date('Y/m/d');
            if ($data_recebida >= $data_atual) {
                echo $data_recebida;
            }
            ?> -->



    <button type="submit" name="Remover">Remover</button>
    </form>

    <?php if (isset($_POST['Remover'])) {
                echo "<p>A remoção foi realizada com sucesso!</p>";
            }
    ?>

<?php else: ?>
     <div class="editar">
    <p>Por favor, selecione uma das opções acima para remoção!</p>
</div>
    <?php endif; ?>
</body>

</html>

