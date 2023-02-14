<?php 
require './credentials.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Bookstore</title>
</head>
<body>
  
  <nav class="navbar navbar-expand navbar-dark bg-dark mb-4">
    <div class="nav navbar-nav align-items-center">
      <a class="nav-item nav-link fw-bold fs-4 text-light" href="index.php">Bookstore</a>
      <a class="nav-item nav-link" href="<?= $URL?>">Inicio</a>
      <a class="nav-item nav-link" href="<?= $URL?>/books.php">Libros</a>
      <a class="nav-item nav-link" href="<?= $URL?>/aboutUs.php">Nosotros</a>
      <a class="nav-item nav-link" href="<?= $URL?>/admin/">Login</a>
    </div>
  </nav>

  <div class="container">
    <div class="row">