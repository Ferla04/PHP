<?php
include("../../database/db.php");

if (isset($_POST["position"])) {
  
  $position = $_POST["position"];
  $connection->consult("INSERT INTO tbl_positions (id, positionName) VALUES (NULL, '$position')");
  header("Location: index.php");
}

?>
<?php include("../../templates/header.php"); ?>

<div class="card text-light bg-dark">
  <div class="card-header"> Cargos </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="position" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="position" id="position" required>
      </div>

      <button type="submit" class="btn btn-success">Agregar</button> &nbsp;
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
  </div>
</div>

<?php include("../../templates/footer.php"); ?>