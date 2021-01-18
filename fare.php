<?php
session_start();
$arr =["Charbagh" => 0,
    "Indranagar" => 10,
    "BBD" =>30,
    "Barabanki" => 60,
    "Faizabad" =>100,
    "Basti" =>150,
    "Gorakhpur" => 210];

$pickup=$_POST['pickup'];
$drop=$_POST['drop'];
$cabtype=$_POST['cabtype'];
$lw=$_POST['lw'];
@$distance="";

 if($pickup=="" || $drop=="" || $cabtype==""){
    echo'<script>alert("Please Select all the feilds")</script>'; 
    $pickup="";
    $drop="";
    $lw="";
    $cabtype="";
}
else{
     $distance=abs($arr[$pickup]-$arr[$drop]);
    
    if($cabtype=="CedMicro"){
            $booking = 50; 
            $distance1 = 13.5; 
            $distance2=12; 
            $distance3= 10.2; 
            $distance4 = 8.5;
            $lw=0;
            $objectMicro = new Fare($distance,$booking,$distance1,$distance2,$distance3,$distance4,$pickup,$drop,$lw,$cabtype);
        }
        else if($cabtype=="CedMini"){
            if($lw<10 && $lw>0){
                $booking = 150+50; 
            }
            elseif($lw<20 && $lw>=10){
                $booking = 150+100;
            }
            elseif($lw>=20){
                $booking = 150+200;
            }
            else{
                $booking=150;
            }
            $distance1 = 14.5; 
            $distance2=13; 
            $distance3= 11.2; 
            $distance4 = 9.5;
            $objectMini = new Fare($distance,$booking,$distance1,$distance2,$distance3,$distance4,$pickup,$drop,$lw,$cabtype);
            
        }
        else if($cabtype=="CedRoyal"){
            if($lw<10 && $lw>0){
                $booking = 200+50; 
            }
            elseif($lw<20 && $lw>=10){
                $booking = 200+100;
            }
            elseif($lw>=20){
                $booking = 200+200;
            }
            else{
                $booking=200;
            }
            $distance1 = 15.5; 
            $distance2=14; 
            $distance3= 12.2; 
            $distance4 = 10.5;
            $objectRoyal = new Fare($distance,$booking,$distance1,$distance2,$distance3,$distance4,$pickup,$drop,$lw,$cabtype);
        }
        else if($cabtype=="CedSUV"){
            if($lw<10 && $lw>0){
                $booking = 250+100; 
            }
            elseif($lw<20 && $lw>=10){
                $booking = 250+200;
            }
            elseif($lw>=20){
                $booking = 250+400;
            }
            else{
                $booking=250;
            }
            $distance1 = 16.5; 
            $distance2=15; 
            $distance3= 13.2; 
            $distance4 = 11.5;
            $objectSUV = new Fare($distance,$booking,$distance1,$distance2,$distance3,$distance4,$pickup,$drop,$lw,$cabtype);
        }
    }
class Fare{
    public $booking;
    function __construct($distance,$booking,$distance1,$distance2,$distance3,$distance4,$pickup,$drop,$lw,$cabtype){
        if($distance<=10){
            $booking=$booking+($distance*$distance1);
        }
        else if($distance<=60 && $distance>10){
            $booking=$booking+($distance1*10)+($distance2*($distance-10));
        }
        else if($distance<=160 && $distance>60){
            $booking=$booking+($distance1*10)+($distance2*50)+(($distance-60)*$distance3); 
        }
        else if($distance>160){
            $booking=$booking+($distance1*10)+($distance2*50)+($distance3*100)+(($distance-160)*$distance4);
        }
      echo "Price : &#8377;".$booking."<br>Distance :".$distance."km<br>Pick up :".$pickup ."<br>Drop :".$drop."<br>Luggage :".$lw."kg<br>Cab type :".$cabtype;
        
      $_SESSION['source']=$pickup; 
      $_SESSION['destination']=$drop;
      $_SESSION['distance']=$distance;
      $_SESSION['luggage']=$lw;
      $_SESSION['fare']=$booking;
      $_SESSION['cabtype']=$cabtype;
  
      
    }
}
?>


    



