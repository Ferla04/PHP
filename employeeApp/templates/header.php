<?php
$URL_BASE = "http://localhost/PHP/employeeApp/"
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
    crossorigin="anonymous"
  >

  <title>Employee App</title>
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=$URL_BASE?>">Sistema Web</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$URL_BASE?>sections/employees/">Empleados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$URL_BASE?>sections/charges/">Puestos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=$URL_BASE?>sections/users/">Usuarios</a>
          </li>
        </ul>
        <a class="btn btn-danger" href="<?=$URL_BASE?>logout.php">Salir</a>
      </div>
    </div>
  </nav>

  <main class="container my-5">