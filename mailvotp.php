<?php
session_start();
$mailsotp=$_POST['mailsotp'];
$msg=$_SESSION['msg'];


// $_SESSION['email']=$email; 
// $_SESSION['msg']=$msg;


echo $mailsotp;
echo $msg;


if ($msg==$mailsotp){
    echo "Welcome your mail is Varified....";
}
else{
    echo "You are entered wrong OTP please try again.....";

}
?>
