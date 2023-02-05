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
          <tr class="">
            <td scope="row">15610</td>
            <td>Programador</td>
            <td>
              <a class="btn btn-info" href="create.php" role="button">Editar</a>
              <a class="btn btn-danger" href="create.php" role="button">Eliminar</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>

<?php include("../../templates/footer.php"); ?>