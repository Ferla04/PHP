<?php include("../../templates/header.php"); ?>

<div class="card text-light bg-dark">
  <div class="card-header"> Datos del empleado </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="firstName" class="form-label">Primer nombre:</label>
        <input type="text" class="form-control" name="firstName" id="firstName">
      </div>

      <div class="mb-3">
        <label for="secondName" class="form-label">Segundo nombre:</label>
        <input type="text" class="form-control" name="secondName" id="secondName">
      </div>

      <div class="mb-3">
        <label for="firstLastname" class="form-label">Primer apellido:</label>
        <input type="text" class="form-control" name="firstLastname" id="firstLastname">
      </div>

      <div class="mb-3">
        <label for="secondLastname" class="form-label">Segundo apellido:</label>
        <input type="text" class="form-control" name="secondLastname" id="secondLastname">
      </div>

      <div class="mb-3">
        <label for="photo" class="form-label">Foto:</label>
        <input type="file" class="form-control" name="photo" id="photo">
      </div>

      <div class="mb-3">
        <label for="cv" class="form-label">Hoja de vida (PDF):</label>
        <input type="file" class="form-control" name="cv" id="cv">
      </div>

      <div class="mb-3">
        <label for="idCharges" class="form-label">Cargo: </label>
        <select class="form-select form-select-sm" name="idCharges" id="idCharges">
          <option selected>Select one</option>
          <option value="">New Delhi</option>
          <option value="">Istanbul</option>
          <option value="">Jakarta</option>
        </select>
      </div>

      <div class="mb-4">
        <label for="admissionDate" class="form-label">Fecha de ingreso:</label>
        <input type="date" class="form-control" name="admissionDate" id="admissionDate">
      </div>

      <button type="submit" class="btn btn-success">Agregar</button> &nbsp;
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
  </div>
</div>

<?php include("../../templates/footer.php"); ?>