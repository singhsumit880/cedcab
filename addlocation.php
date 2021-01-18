<?php



if(isset($_POST['submit'])){

    include 'connection.php';

    $name=$_POST['location'];
    $distance=$_POST['distance'];


    // $sql="DELETE FROM `table_location` WHERE id=$id";
    $sql="INSERT INTO `table_location`( `name`, `distance`, `is_available`) VALUES ('$name','$distance','1')";
    $query=mysqli_query($conn, $sql);
    header("Location: admindashboard.php" );
}

?>








