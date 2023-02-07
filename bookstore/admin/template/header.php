<?php
$URL = 'http://'.$_SERVER['HTTP_HOST'].'/PHP/bookstore'; 
$ADMIN_URL = $URL.'/admin';

session_start();
if( !isset($_SESSION['user']) ){
  header('location:../index.php');
}else{
  $userName = $_SESSION['userName'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

  <nav class="navbar navbar-expand navbar-light bg-light mb-4">
    <div class="nav navbar-nav align-items-center">
      <h2 class="nav-item nav-link fw-bold fs-4 text-dark">Admin's Bookstore</h2>
      <a class="nav-item nav-link" href="<?= $ADMIN_URL ?>/home.php">Inicio</a>
      <a class="nav-item nav-link" href="<?= $ADMIN_URL ?>/section/books.php">Libros</a>
      <a class="nav-item nav-link link-danger" href="<?= $ADMIN_URL ?>/section/logout.php">Salir</a>
      <a class="nav-item nav-link" href="<?= $URL ?>">Ver sitio web</a>
    </div>
  </nav>

  <div class="container">