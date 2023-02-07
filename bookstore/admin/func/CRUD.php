<?php

define('IMG_FOLDER', '../../img/'); //cambiar los permisos de la carpeta

function deleteImg( $connection, $bookId ) {
  [ 'image'=>$searchImg ] = $connection->consult( "SELECT `image` FROM `books` WHERE id=$bookId;" )[0];
  if( $searchImg && $searchImg != 'image.jpg' ){
    unlink( IMG_FOLDER.$searchImg );
  }
}

function insertMysql( $connection, $bookName, $bookImg, $bookImg_tmp ){
  $connection->consult( "INSERT INTO `books` (`id`, `name`, `image`) VALUES (NULL, '$bookName', '$bookImg');" );
  if( $bookImg_tmp ){
    move_uploaded_file( $bookImg_tmp, IMG_FOLDER.$bookImg );
  }
}


function updateMysql( $connection, $bookId, $bookName, $bookImg, $bookImg_tmp ){
  $connection->consult( "UPDATE `books` SET `name`='$bookName'  WHERE id=$bookId" );
  if( $bookImg != 'image.jpg' ){
    move_uploaded_file( $bookImg_tmp, IMG_FOLDER.$bookImg );
    deleteImg( $connection, $bookId );
    $connection->consult( "UPDATE `books` SET `image`='$bookImg'  WHERE id=$bookId" );
  }
}

function deleteMysql( $connection, $bookId ){
  //Buscar imagen 
  deleteImg( $connection, $bookId );
  //Eliminar archivo
  $connection->consult( "DELETE FROM `books` WHERE id=$bookId;" );
}

function selectMysql( $connection, $bookId ){
  return $connection->consult( "SELECT * FROM `books` WHERE id=$bookId;" )[0];
}

function selectAllMysql( $connection ){
  return $connection->consult("SELECT * FROM `books`");
}

?>