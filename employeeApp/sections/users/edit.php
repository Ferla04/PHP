<?php
include("../../database/db.php");

if (!isset($_GET["id"])) {
  header("Location: index.php");
}

$id = $_GET["id"];

if ($_POST) {
  ["user"=>$user, "email"=>$email, "password"=>$password]= $_POST;
  $connection->consult(
    "UPDATE tbl_users SET user='$user',email='$email',password='$password' WHERE id=$id"
  );
  header("Location: index.php");
}

["user"=>$user, "email"=>$email, "password"=>$password] = $connection->consult("SELECT * FROM tbl_users WHERE id=$id", 1);

?>
<?php include("../../templates/header.php"); ?>

<div class="card text-light bg-dark">
  <div class="card-header"> Datos del Usuario </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="id" class="form-label">ID:</label>
        <input readonly type="text" class="form-control" name="id" id="id" value="<?=$id?>">
      </div>

      <div class="mb-3">
        <label for="user" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="user" id="user" value="<?=$user?>" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo:</label>
        <input type="email" class="form-control" name="email" id="email" value="<?=$email?>" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" name="password" id="password" value="<?=$password?>" required>
      </div>

      <button type="submit" class="btn btn-success">Agregar</button> 
      &nbsp;
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
  </div>
</div>

<?php include("../../templates/footer.php"); ?>