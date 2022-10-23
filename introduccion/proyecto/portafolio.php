<?php include 'cabecera.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <!-- FORMULARIO -->
            <div class="card bg-dark text-light mt-5">
                <div class="card-header"> Datos Proyecto </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post">
                        Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
                        <br />
                        Imagen del Proyecto: <input class="form-control" type="text" name="imagen" id="">
                        <br />
                    
                        <button class="btn btn-success" type="submit"> Enviar proyecto </button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-6">

            <!-- TABLA -->
            <div class="table-responsive">
                <table class="table table-dark mt-5">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre Proyecto</th>
                            <th scope="col">Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">3</td>
                            <td>Aplicacion web</td>
                            <td>img.jpg</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>





<?php include 'pie.php'; ?>