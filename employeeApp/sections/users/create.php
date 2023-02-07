<?php
include("../../database/db.php");

if ($_POST) {
  
  ["user"=>$user, "email"=>$email, "password"=>$password]= $_POST;
  $connection->consult(
    "INSERT INTO tbl_users (id, user, email, password) VALUES (NULL,'$user','$email','$password')"
  );
  header("Location: index.php");
}

?>
<?php include("../../templates/header.php"); ?>

<div class="card text-light bg-dark">
  <div class="card-header"> Datos del Usuario </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="user" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="user" id="user" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo:</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" name="password" id="password" required>
      </div>

      <button type="submit" class="btn btn-success">Agregar</button> 
      &nbsp;
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
  </div>
</div>

<?php include("../../templates/footer.php"); ?>