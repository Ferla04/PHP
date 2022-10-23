<?php

require '../../database/db.php';

if( isset( $_POST['save_task'] ) ){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $query = "INSERT INTO task(title, description, date) VALUES ( '$title', '$description', '$date' )";
    $result = mysqli_query( $connection, $query );

    if( !$result ){
        die('Query falied');
    }

    $_SESSION['taskSaved'] = array( 'message' => 'Task saved', 'color' => 'success' );

    header('Location: ../../views/index.php');
}

?>