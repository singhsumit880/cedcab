<?php
        session_start();
include 'connection.php';


$email=$_SESSION['email'];
$sql="SELECT * FROM `ride_tbl`";
$query=mysqli_query($conn,$sql);

$fare=0;
$completedrides=0;
$allrides=0;
$pendingrides=0;
$cacelledrides=0;
while($row= mysqli_fetch_array($query)){

if($row['email']==$email && $row['status']==2){
    $fare=$fare+$row['fare'];
    $completedrides++;
}
if($row['email']==$email){
    $allrides++;
}
if($row['email']==$email && $row['status']==1){
   
    $pendingrides++;
}

if($row['email']==$email && $row['status']==0){
   
    $cacelledrides++;
}
?>
        <?php  }
       
        
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
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .sidenav {
            height: 100%;
            width: 220px;

            user/ .sidenav a:hover {
                color: #f1f1f1;
            }
    </style>
</head>

<body>
   

    <div class="container-fluid h-100 bg" >
        <div class="row h-100 ">
            <aside class="col-12 col-md-2 p-0 ">
                <nav class="navbar navbar-expand  flex-md-column flex-row align-items-start">



                <?php
                    include 'connection.php';
                    $sql="SELECT * FROM `user`";
                    $query=mysqli_query($conn,$sql);

                    $temp=0;
                    while($row= mysqli_fetch_array($query)){

                    if($row['email']==$email && $temp==0){
                                                    ?>
                <li class="nav-item" style="list-style:none">
                <a><i class="fa fa-user-circle-o" aria-hidden="true"></i> Hello <?php echo $row['name']; ?></a>
                <?php $temp++; } }?>
                             
                </li><br>
                    <div class="collapse navbar-collapse">
                        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                            <li class="nav-item">
                                <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a></li><br>
                            <li class="nav-item"><a href="index.php"><i class="fa fa-car" ></i> Book New Ride</a></li>
                            <br>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Rides
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)" id="pendingrides">Pending
                                        Rides</a>
                                    <a class="dropdown-item" href="javascript:void(0)" id="completedrides">Completed
                                        Rides</a>
                                    <a class="dropdown-item" href="javascript:void(0)" id="previousrides">All Rides</a>
                                    <a class="dropdown-item" href="javascript:void(0)" id="previousrides">Total
                                        Expanses</a>

                                </div>
                            </li><br>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="updateuser.php" id="pendingrides">Update
                                        Information</a>
                                    <a class="dropdown-item" href="javascript:void(0)" id="completedrides">Change
                                        Password</a>
                                </div>
                            </li><br>

                            <li class="nav-item"><a href="#"><i class="fa fa-commenting" ></i> Feedback</a></li><br>
                            <li class="nav-item"><a href="logout.php"><i class="fa fa-sign-out" ></i> Sign Out</a></li><br>
                        </ul>
                    </div>
                </nav>
            </aside>

            <main class="col">
                <h1>Welcome to user dashboard......</h1>


                <div class="card-deck">
                    <div class="">
                        <div class="card text-white text-center bg-dark mb-3" style="width: 300px; height:180px;">
                            <div class="card-body">
                                <h5 class="card-title">Pending Rides</h5>
                                <h4><?php echo $pendingrides; ?></h4>
                                <button class="btn btn-outline-primary" type="submit"
                                    onclick="location.href = 'userpendingrides.php';">More Info</button>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card text-white text-center bg-dark mb-3" style="width: 300px; height:180px;">
                            <div class="card-body">
                                <h5 class="card-title">Completed Rides</h5>
                                <h4><?php echo $completedrides; ?></h4>
                                <button class="btn btn-outline-primary" type="submit"
                                    onclick="location.href = 'usercompletedrides.php';">More Info</button>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card text-white text-center bg-dark mb-3" style="width: 300px; height:180px;">
                            <div class="card-body">
                                <h5 class="card-title">All Rides</h5>
                                <h4><?php echo $allrides; ?></h4>
                                <button class="btn btn-outline-primary" type=""
                                    onclick="location.href = 'userallrides.php';">More Info</button>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="card text-white text-center bg-dark mb-3" style="width: 300px; height:180px;">
                            <div class="card-body">
                                <h5 class="card-title">Total Expanses</h5>
                                <h4>(&#8377;)<?php echo $fare; ?></h4>
                                <button class="btn btn-outline-primary" type="submit"
                                    onclick="location.href = 'usercompletedrides.php';">More Info</button>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="card text-white text-center bg-dark mb-3" style="width: 300px; height:180px;">
                            <div class="card-body">
                                <h5 class="card-title">Cancelled Rides</h5>
                                <h4><?php echo $cacelledrides; ?></h4>
                                <button class="btn btn-outline-primary" type="submit"
                                    onclick="location.href = 'usercancelledrides.php';">More Info</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

    <?php include 'footer.php' ?>
   
</body>

</html>