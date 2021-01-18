<?php
session_start();

$pickup=$_SESSION['source'];
$drop=$_SESSION['destination'];
$distance=$_SESSION['distance'];
$lw=$_SESSION['luggage'];
$booking=$_SESSION['fare'];
$cabtype=$_SESSION['cabtype'];

include 'connection.php';







$sql="INSERT INTO `ride_tbl`(`source`, `destination`, `distance`, `luggage`, `fare`,`status`, `cab_type`) VALUES ('$pickup','$drop','$distance','$lw','$booking','1','$cabtype')";


if(mysqli_query($conn,$sql)){
    echo "New Record Added in Database";
}
else{
    echo "errror",mysqli_error($conn);
}


?>