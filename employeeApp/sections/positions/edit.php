<?php
include("../../database/db.php");

if (!isset($_GET["id"])) {
  header("Location: index.php");
}

$id = $_GET["id"];

if ($_POST) {
  $positionName = $_POST["position"];
  $connection->consult("UPDATE tbl_positions SET positionName='$positionName' WHERE id=$id");
  header("Location: index.php");
}

["positionName"=> $position] = $connection->consult("SELECT positionName FROM tbl_positions WHERE id=$id", 1);

?>
<?php include("../../templates/header.php"); ?>

<div class="card text-light bg-dark">
  <div class="card-header"> Editar </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="id" class="form-label">ID:</label>
        <input readonly type="text" class="form-control" name="id" id="id" value="<?=$id?>">
      </div>

      <div class="mb-3">
        <label for="position" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="position" id="position" value="<?=$position?>">
      </div>

      <button type="submit" class="btn btn-warning">Actualizar</button> &nbsp;
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
  </div>
</div>

<?php include("../../templates/footer.php"); ?>