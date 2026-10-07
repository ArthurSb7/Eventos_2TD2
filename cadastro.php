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
    
    <h1>Cadastrar eventos</h1>
    <?php require_once __DIR__ . '/nav.php'?>

    <form action="processaCadastro.php" method="post">
        <div>
            <label for="titulo">Título do Evento: </label>
            <input type="text" name="titulo" id="titulo" placeholder="Insira o Título do evento aqui" require>
        </div>
        <div>
            <label for="categoria">Categoria: </label>
            <select name="categoria" id="categoria">
                <option value="">Selecione</option>
                <option value="Palestra">Palestra</option><!-- palestra -->
                <option value="Oficina">Oficina</option><!-- oficina -->
               <option value="Visita Técnica">Visita Técnica</option>   <!-- visita tecnica -->
               <option value="Feira">Feira</option> <!-- Feira -->
            </select>
        </div>
        <div>
            <label for="data">Data do evento: </label>
            <input type="date" name="data" id="data" placeholder=" dd/mm/aa" require>
        </div>
        <div>
            <label for="horario">Horário de Início: </label>
            <input type="time" name="horario" id="horario" placeholder="Ex: 13:00" require>
        </div>
        <div>
            <label for="local">Local: </label>
            <input type="location" name="local" id="local" placeholder="Insira o endereço aqui:" require>
        </div>
        <div>
            <label for="qtd_vagas">Número de Vagas: </label>
            <input type="number" name="qtd_vagas" id="Vagas" min="1" placeholder="Insira o Nro de vagas" require>
            
        </div>
        <div>
            <label for="descricao">Descrição(opcional): </label>
            <input type="text" name="descricao" id="descricao"  placeholder="Descrição do evento">
            
        </div>
        <div>
            <label for="imagem">Imagem(Se houver): </label>
            <input type="link" name="imagem" id="imagem" placeholder="Insira o endereço da imagem aqui, caso tiver" require>
            
        </div>
        <div>
            <button type="submit" id="botao" name="botao">Enviar</button>
        </div>
    </form>
</body>
</html>