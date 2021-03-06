<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" /> -->
      <link rel="stylesheet" href="style.css">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
      <script src="test.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src= "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <title>Document</title>
</head>
<body>
<body>
    <?php include 'head.php' ?>
  <div class="container-fluid bg">
  <h2>Completed Rides...</h2>
    <table class="table table-dark" id="data">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Pick UP</th>
            <th scope="col">Drop</th>
            <th scope="col">Cab Type</th>
            <th scope="col">Ride Date</th>
            <th scope="col">Distance</th>
            <th scope="col">Luggage</th>
            <th scope="col">Fare</th>
          </tr>
        </thead>



        <?php
        session_start();
include 'connection.php';
// $q="select * from user";

$email=$_SESSION['email'];
$sql="SELECT * FROM `ride_tbl`";
$query=mysqli_query($conn,$sql);


while($row= mysqli_fetch_array($query)){

if($row['email']==$email && $row['status']==2){






?>

        <tbody>
          <tr>
            <td><?php echo $row['source']; ?></td>
            <td><?php echo $row['destination']; ?></td>
            <td><?php echo $row['cab_type']; ?></td>
            <td><?php echo $row['ride_date']; ?></td>
            <td><?php echo $row['distance']; ?></td>
            <td><?php echo $row['luggage']; ?></td>
            <td><?php echo $row['fare']; ?></td>
          </tr>
        </tbody>
        <?php } }
       
        
        ?>
      </table>

      </div>
      <?php include 'footer.php' ?>
      <script>
        $(document).ready(function(){  
              $('#data').DataTable();  
         });
        </script>
        
</body>
        
</body>
</html>