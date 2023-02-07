<?php
include("../../database/db.php");

$positionList = $connection->consult("SELECT * FROM tbl_positions");

if (isset($_GET["id"])) {

  $id = $_GET["id"];
  $connection->consult("DELETE FROM tbl_positions WHERE id=$id");
  header("Location: index.php");

}

?>
<?php include("../../templates/header.php"); ?>

<div class="card bg-dark">
  <div class="card-header">
    <a class="btn btn-primary float-end" href="create.php" role="button">Agregar Cargo</a>
  </div>

  <div class="card-body">

    <div class="table-responsive-sm">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($positionList as $position) {?>
            <tr>
              <td scope="row"><?=$position["id"]?></td>
              <td><?=$position["positionName"]?></td>
              <td>
                <a class="btn btn-info" href="edit.php?id=<?=$position["id"]?>" role="button">Editar</a>
                &nbsp;
                <a class="btn btn-danger" href="index.php?id=<?=$position["id"]?>" role="button">Eliminar</a>
              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>

  </div>
</div>

<?php include("../../templates/footer.php"); ?>