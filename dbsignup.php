<?php
// if(isset($_POST['submit'])){

include 'connection.php';

$mobile=$_POST['mobile'];
$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];



$sql = "INSERT INTO `user`(`mobile`, `email`,`name`, `password`, `isadmin`,`status`) VALUES ('$mobile','$email','$name','$password','0','1')";


// $sql="INSERT INTO `user`(`mobile`, `email`, `name`, `password`, `isadmin`, `status`) VALUES ($mobile','$email','$name','$password')";


if(mysqli_query($conn,$sql)){
    echo "New Record Added in Database";
    header("Location: login.php" );
}
else{
    echo "errror",mysqli_error($conn);
}

// }
;
?>