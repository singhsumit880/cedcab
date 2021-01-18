<?php

include 'connection.php';

    $id=$_GET['id'];
    
    $sql="UPDATE `user` SET `status`='1' WHERE id=$id";

    $query=mysqli_query($conn, $sql);

    header("Location: admindashboard.php" );


?>