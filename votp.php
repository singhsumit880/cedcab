<?php
session_start();
$sotp=$_POST['sotp'];
$otp=$_SESSION['otp'];

// echo $sotp;
// echo $otp;


if ($otp==$sotp){
    echo "Welcome your mobile number is Varified....";
}
else{
    echo "You are entered wrong OTP please try again.....";

}
?>







