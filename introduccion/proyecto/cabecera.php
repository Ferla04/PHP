<?php
session_start();

if( isset($_SESSION['usuario']) != 'Fer'){
    require 'cerrarSesion.php';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Portafolio</title>
</head>
<body>

    <ul class="nav bg-dark">
        <li class="nav-item"><a class="nav-link" href="index.php"> Inicio </a></li>
        <li class="nav-item"><a class="nav-link" href="portafolio.php"> Portafolio </a></li>
        <li class="nav-item"><a class="nav-link" href="cerrarSesion.php"> Salir </a></li>
    </ul>

    <div class="container">
        
