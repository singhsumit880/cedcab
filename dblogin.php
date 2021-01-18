
<?php 
session_start();

// if(isset(['submit']){


 include 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];


$_SESSION['email']=$email;





$temp=0;

$q="select * from user";
$query=mysqli_query($conn,$q);


while($row= mysqli_fetch_array($query)){

// echo $row['email'];
// echo "<br>";
// echo $row['password'];
// echo "<br>";
// echo $row['isadmin'];

if($email==$row['email'] && $password==$row['password']){

    if($row['isadmin']==1){
        
        header("Location: admindashboard.php" );
        $temp++;
    }
    else{

        $pickup=$_SESSION['source'];
        $drop=$_SESSION['destination'];
        $distance=$_SESSION['distance'];
        $lw=$_SESSION['luggage'];
        $booking=$_SESSION['fare'];
        $cabtype=$_SESSION['cabtype'];

        include 'connection.php';

        $sql="INSERT INTO `ride_tbl`(`source`, `destination`, `distance`, `luggage`, `fare`,`status`, `cab_type`,`email`) VALUES ('$pickup','$drop','$distance','$lw','$booking','1','$cabtype','$email')";
        echo "<script>alert(Welcome Your CAB is BOOKED......)</script>";
        
        if(mysqli_query($conn,$sql)){
            // echo "New Record Added in Database";
            // echo "<script>alert'Your Ride is Booked...."; 
            // alert("Hello! I am an alert box!");
        }
        else{
            echo "errror",mysqli_error($conn);
        }
        unset($_SESSION['source']);
        unset($_SESSION['destination']);
        unset($_SESSION['distance']);
        unset($_SESSION['luggage']);
        unset($_SESSION['fare']);
        unset($_SESSION['cabtype']);
        
        $temp++;
        
        header("Location: userdashboard.php" );
    }

}

elseif($email!=$row['email'] && $password!=$row['password'] && $temp==0){
    
    echo "<h1>Your id/Password is wrong please try again...</h1>";
    $temp++;
}
// elseif($email!=$row['email'] && $temp==0){
    
//     echo "<h1>Your are not a registered user kindly signup...</h1>";

// }

}


// }

?>