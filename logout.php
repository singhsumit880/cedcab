<?php
session_start();
unset($_SESSION['password']);
unset($_SESSION['email']);


unset($_SESSION['source']);
unset($_SESSION['destination']);
unset($_SESSION['distance']);
unset($_SESSION['luggage']);
unset($_SESSION['fare']);
unset($_SESSION['cabtype']);
session_destroy();
header('location:login.php');
die();
?>