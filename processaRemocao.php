<?php

require_once "init.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
   
    $idEventos = $_POST['id'];

   unset ($_SESSION['eventos'][$idEventos]);
    header("Location: index.php");
    exit;
}