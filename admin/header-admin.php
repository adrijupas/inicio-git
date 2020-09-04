<?php  
session_start();

if(!isset($_SESSION["autentificacion"]) && $_SESSION["autentificacion"]!=="si"){
    header('location:../../index.php');
}

// include '../header.php';

