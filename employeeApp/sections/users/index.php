<?php
include("../../database/db.php");

$userList = $connection->consult("SELECT * FROM tbl_users");

if (isset($_GET["id"])) {
  
  $id = $_GET["id"];
  $connection->consult("DELETE FROM tbl_users WHERE id=$id");
  header("Location: index.php");

}

?>
<?php include("../../templates/header.php"); ?>

<div class="card bg-dark">
  <div class="card-header">
    <a class="btn btn-primary float-end" href="create.php" role="button">Agregar Usuario</a>
  </div>

  <div class="card-body">

    <div class="table-responsive-sm">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($userList as $user) {?>
            <tr class="">
              <td scope="row"><?=$user["id"]?></td>
              <td><?=$user["user"]?></td>
              <td><?=$user["email"]?></td>
              <td>*****</td>
              <td>
                <a class="btn btn-info" href="edit.php?id=<?=$user["id"]?>" role="button">Editar</a>
                &nbsp;
                <a 
                  class="btn btn-danger" 
                  href="index.php?id=<?=$user["id"]?>" 
                  role="button"
                  <?= $user["id"] === 1 ? "hidden" : "" ?>
                >
                  Eliminar
                </a>
              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>

  </div>
</div>


<?php include("../../templates/footer.php"); ?>