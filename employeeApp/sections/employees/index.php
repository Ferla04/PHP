<?php include("../../templates/header.php"); ?>


<div class="card bg-dark">
  <div class="card-header">
    <a class="btn btn-primary float-end" href="create.php" role="button">Agregar registro</a>
  </div>

  <div class="card-body">

    <div class="table-responsive-sm">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Foto</th>
            <th scope="col">CV</th>
            <th scope="col">Puesto</th>
            <th scope="col">Fecha de Ingreso</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td scope="row">Fernanda</td>
            <td>chica linda</td>
            <td>pdf...</td>
            <td>programadora fullstack</td>
            <td>2020</td>
            <td>
              <a class="btn btn-warning" href="create.php" role="button">Carta</a>
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