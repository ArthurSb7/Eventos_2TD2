<?php
require_once __DIR__ . '/init.php';


if(isset($_GET['erro']) && $_GET['erro'] != "")
{
    echo "<p style='color: red;'> {$_GET['erro']} </p>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="">

</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="detalhes.php">Detalhar</a>
            <a href="edicao.php">Editar</a>
            <a href="remocao.php">Remover</a>
            <a href="cadastro.php">Cadastrar</a>
        </nav>
    </header>
    <h1>Cadastrar eventos</h1>

    <form action="processaCadastro.php" method="post">
        <div>
            <label for="titulo">Título do Evento: </label>
            <input type="text" name="titulo" id="titulo" placeholder="Insira o Título do evento aqui" required>
        </div>

        <div>
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao"  placeholder="Descrição do evento" required>
            
        </div>

        <div>
            <label for="area">Área: </label>
            <select name="area" id="area">
                <option value="">Selecione</option>
                <option value="ti">Tecnologia da Informação</option>
                <option value="automacao">Automação</option>
               <option value="mecatronica">Mecatrônica</option>   
              
            </select>
        </div>
        <div>
            <label for="data">Data do evento: </label>
            <input type="date" name="data" id="data" placeholder=" dd/mm/aa" required>
        </div>
        <div>
            <label for="inicio">Horário de Início: </label>
            <input type="time" name="inicio" id="inicio" placeholder="Ex: 13:00" required>
        </div>

        <div>
            <label for="fim">Horário do fim: </label>
            <input type="time" name="fim" id="fim" placeholder="Ex: 17:00" required>
        </div>

        <div>
            <label for="local">Local: </label>
            <input type="location" name="local" id="local" placeholder="Insira o endereço aqui:" required>
        </div>
        <div>
            <label for="instrutor">Instrutor: </label>
            <input type="text" name="instrutor" id="instrutor" required>
            
        </div>
        
        <div>
            <button type="submit" id="botao" name="botao">Enviar</button>
        </div>
    </form>
</body>
</html>