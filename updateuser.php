<? 
session_start();

$email=$_SESSION['email'];
print_r($_SESSION);

?>


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
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="container-fluid bg">
        <div class="container log">
            <form class="col-md-3  centered main" method="post" action="">
                <h3 class="text-center">Update User Data</h3>

                <div class="form-outline mb-4">
                    <label class="form-label">Mobile number</label>
                    <input type="number" id="number" class="form-control" placeholder="Mobile Number" name="mobile" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label">Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Name" name="name" />
                </div>


                <div class="form-outline mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" />
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
        
            </form>


<?php 

if(isset($_POST['submit'])){

    include 'connection.php';
    
    $mobile=$_POST['mobile'];
    $name=$_POST['name'];
    $password=$_POST['password'];
  
    $sql="SELECT * FROM `user`";



    while($row= mysqli_fetch_array($query)){

    if($row['email']==$email && $password==$row['password']){

    
    // $sql = "INSERT INTO `user`(`mobile`, `email`,`name`, `password`, `isadmin`,`status`) VALUES ('$mobile','$email','$name','$password','0','1')";
    
    
    $sql="update user set mobile=$mobile,name='$name' WHERE $_SESSION'['email']'=$email";
    }
}
    if(mysqli_query($conn,$sql)){
        echo "Data Updated";
        header("Location: userdashboard.php" );
    }
    else{
        echo "errror",mysqli_error($conn);
    }
    
    // }
    ;


}

?>













    </div>
    </div>
    
    <?php include 'footer.php' ?>



</body>

</html>