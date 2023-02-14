<?php include '../template/header.php';?>
<?php
require '../../credentials.php';
require '../func/CRUD.php';
include '../config/db.php';
$connection = new ConnectionMysql(SERVER, USER, PASSWORD, DATABASE);
$dateTime = new DateTime();
$bookId = '';
$bookName = '';
$bookImg = '';
$action = '';

if( isset($_POST['bookName']) ){
  [ 'bookName'=>$bookName ] = $_POST;
  [ 'bookImage'=>[ 'name'=>$bookImg, 'tmp_name'=>$bookImg_tmp ] ] = $_FILES;

  $bookImg = $bookImg ? $dateTime->getTimestamp().'_'.$bookImg : 'image.jpg';
}

if( $_POST ){

  [ 'bookId'=>$bookId, 'action'=>$action ] = $_POST;

  switch( $action ){
    case 'insert': insertMysql( $connection, $bookName, $bookImg, $bookImg_tmp );
      break;

    case 'update': updateMysql( $connection, $bookId, $bookName, $bookImg, $bookImg_tmp );
      break;

    case 'delete': deleteMysql( $connection, $bookId );
      break;

    case 'select':
        [ 'name'=>$bookName, 'image'=>$bookImg ] = selectMysql( $connection, $bookId );
      break;
  }

  if( $action !== 'select'){
    header('Location:books.php');
  }

}

$booksList = selectAllMysql( $connection );

?>

<div class="row">
  <div class="col-md-5"> 
    <div class="card">
      <div class="card-header">Datos Libros</div>
      <div class="card-body">

      <form method="post" enctype="multipart/form-data">
        ID:    <input class="form-control" value="<?=$bookId?>" type="text" name="bookId" readonly>
        <br />
        nombre:<input class="form-control" value="<?=$bookName?>" type="text" name="bookName" required>                   
        <br />
        Imagen:
        <br />
        <?= $bookImg ? "<img class='img-thumbnail rounded' src='../../img/$bookImg' width='60'>" : '' ?>
        <input class="form-control" type="file" name="bookImage">
        <br />
        <div class="btn-group" role="group">
          <button type="submit" name="action" value="insert" <?= $action == 'select'? 'disabled': '' ?> class="btn btn-success">Agregar</button>
          <button type="submit" name="action" value="update" <?= $action != 'select'? 'disabled': '' ?> class="btn btn-warning">Modificar</button>
          <button type="submit" name="action" value="cancel" <?= $action != 'select'? 'disabled': '' ?> class="btn btn-info">Cancelar</button>
        </div>
      </form>

      </div>
    </div>
  </div>

  <div class="col-md-7"> 
    <div class="table-responsive">
      <table class="table table-light">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach( $booksList as $book ) {?>
            <tr>
              <td scope="row"><?= $book['id'] ?></td>
              <td><?= $book['name'] ?></td>
              <td>
                <img class="img-thumbnail rounded" width="60" src="../../img/<?= $book['image'] ?>" alt="">
              </td>

              <td>
                <form method="post">
                  <input type="hidden" name="bookId" value="<?=$book['id']?>" readonly>
                  <button type="submit" name="action" value="select" class="btn btn-primary">Seleccionar</button>
                  <button type="submit" name="action" value="delete" class="btn btn-danger">Borrar</button>
                </form>
              </td>
            </tr>
          <?php }?>

        </tbody>
      </table>
    </div>
    
  </div>
</div>

<?php include '../template/footer.php';?>
