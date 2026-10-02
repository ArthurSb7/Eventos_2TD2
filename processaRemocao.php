<?php

require_once __DIR__ . "/init.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $eventoDeletado = $_POST; 
    $idEvento = $_POST['id'];

    unset($_SESSION['eventos'][$idEvento]);
    header("Location:" . "index.php");
    exit;
}