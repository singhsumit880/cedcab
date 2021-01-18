<?php

include 'connection.php';

    $id=$_GET['id'];
    $sql="DELETE FROM `table_location` WHERE id=$id";
    $query=mysqli_query($conn, $sql);
    header("Location: admindashboard.php" );


?>