<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CEDCAB</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="test.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php include 'head.php' ?>
  <div class="container-fluid bg">
    <div class="container log">
        <form class="col-md-3  centered main" method="post" action="dbsignup.php">
            <h3 class="text-center">Register</h3>
<!-- ....................................................................................... -->
            <div class="form-outline mb-4">
                    <label class="form-label" >Mobile number</label>
                    <input type="number" id="number" class="form-control" placeholder="Mobile Number" name="mobile"/>
                    
                </div>
                <div id="div1">
                <input type="button" name="otp" id="otp" value="Request OTP" class="btn btn-primary btn-block mb-4 form-control mt-4">

              <div class="form-outline mb-4"  id="otpbox" >
              <label class="form-label">Enter OTP</label>
              <input type="text" placeholder="Enter OTP" name="sotp" id="sotp" required class="form-control" />
            
              <input type="button" name="varify" value="Varify" id="varify" class="btn btn-primary btn-block mb-4 form-control mt-4">
            </div>
</div>

<!-- .....................................................................  -->

            <div id="div2" style="display:none">  
            <!-- Email input -->
            <div class="form-outline mb-4" >
                <label class="form-label" >Email Address</label>
                    <input type="email" id="email" class="form-control" placeholder="Email" name="email"/>
                   
                    <div id="div3" style="display:none">
                <input type="button" name="mailotp" id="mailotp" value="Request OTP" class="btn btn-primary btn-block mb-4 form-control mt-4">

              <div class="form-outline mb-4"  id="mailotpbox" >
              <label class="form-label">Enter OTP</label>
              <input type="text" placeholder="Enter OTP" name="mailsotp" id="mailsotp" required class="form-control" />
            
              <input type="button" name="mailvarify" value="mailvarify" id="mailvarify" class="btn btn-primary btn-block mb-4 form-control mt-4">
            </div>
</div>

<!-- ...............................................................  -->


                </div>
                <div id="div4" style="display:none">
                <div class="form-outline mb-4" >
                    <label class="form-label" >Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Name" name="name"/>
                   
                </div>
    
                <!-- Password input -->
                <div class="form-outline mb-4" >
                <label class="form-label" >Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" name="password"/>
                    
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
</div>
                <!-- <div class="form-outline mb-4">
                <label class="form-label" >Re-Enter Password</label>
                    <input type="password" id="cpassword" class="form-control" placeholder="Password"/>
                    
                </div> -->
    
            
    
                <!-- Submit button -->
              
</div>
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Already a member? <a href="login.php">Log in</a></p>
                   
                </div>
            </form>
        </div>
        </div>
        <?php include 'footer.php' ?>


<script>





$("#otp").click(function(e)
{
var number = $("#number").val();
$.ajax(
{
url:'motp.php',
type:'POST',
data: {number:number},
success:function(data)
{
console.log(data);

}
});
});


$("#varify").click(function(e)
{

var sotp = $("#sotp").val();
console.log(sotp);
$.ajax(
{
url:'votp.php',
type:'POST',
data: {sotp:sotp},
success:function(data)
{
console.log(data);

$('#div1').css('display','none');
$('#div2').css('display','block');
$('#div3').css('display','block');

$("#show").html(data);
}
});
});


// <..................................>


$("#mailotp").click(function(e)
{
var email = $("#email").val();
$.ajax(
{
url:'mailotp.php',
type:'POST',
data: {email:email},
success:function(data)
{
console.log(data);

}
});
});


$("#mailvarify").click(function(e)
{

var mailsotp = $("#mailsotp").val();
console.log(mailsotp);
$.ajax(
{
url:'mailvotp.php',
type:'POST',
data: {mailsotp:mailsotp},
success:function(data)
{
console.log(data);

$('#div4').css('display','block');
$('#div2').css('display','block');
$('#div3').css('display','none');

$("#show").html(data);
}
});
});



</script>

</body>
</html>