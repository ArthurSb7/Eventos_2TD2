<?php
require_once __DIR__ . "/init.php";

$id = $_SESSION['proximo_id'];

$novo_evento = 
[
    'id' => $id,
    'titulo' => $_POST['titulo'],
    'descricao' => $_POST['descricao'],
    'area' => $_POST['area'],
    'data' => $_POST['data'],
    'inicio' => $_POST['inicio'],
    'fim' => $_POST['fim'],
    'local' => $_POST['local'],
    'responsavel' => $_POST['instrutor'] 
];

$_SESSION['eventos'][$id] = $novo_evento;
$_SESSION['proximo_id']++;

if (empty(trim($_POST['titulo'] ?? ''))) {
    header("Location: " . "/cadastro.php?erro=Titulo invalido");
    exit;
}

if (empty(trim($_POST['descricao'] ?? ''))) {

    header("Location: " . "/cadastro.php?erro=Descrição invalida");
    exit;
}

if (empty(trim($_POST['data'] ?? ''))) {
    header("Location: " . "/cadastro.php?erro=Data invalida");
    exit;
}

if($_POST['data'] < date('Y-m-d'))
{
    header("Location: " . "/cadastro.php?erro=Data invalida");
    exit;
}

if(empty($_POST['erro']))
{
    header("Location: " . "index.php");
    exit;

}
