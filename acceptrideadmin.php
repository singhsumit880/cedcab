<?php

include 'connection.php';

    $ride_id=$_GET['ride_id'];
    
    $sql="UPDATE `ride_tbl` SET `status`='2' WHERE ride_id=$ride_id";

    $query=mysqli_query($conn, $sql);

    header("Location: admindashboard.php" );


?>