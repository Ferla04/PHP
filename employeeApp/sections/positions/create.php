<?php include("../../templates/header.php"); ?>

<div class="card text-light bg-dark">
  <div class="card-header"> Cargos </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="position" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="position" id="position">
      </div>

      <button type="submit" class="btn btn-success">Agregar</button> &nbsp;
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
  </div>
</div>

<?php include("../../templates/footer.php"); ?>