<?php include("../../templates/header.php"); ?>

<div class="card text-light bg-dark">
  <div class="card-header"> Datos del Usuario </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="user" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="user" id="user">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo:</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>

      <button type="submit" class="btn btn-success">Agregar</button> &nbsp;
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
  </div>
</div>

<?php include("../../templates/footer.php"); ?>