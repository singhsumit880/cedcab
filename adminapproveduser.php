<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
      <link rel="stylesheet" href="style.css">
      <script src="test.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src= "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <title>Document</title>
</head>
<body>
<body>
    <?php include 'head.php' ?>
  <div class="container-fluid bg">
    <table class="table table-dark" id="data">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Time</th>
          </tr>
        </thead>
        <?php
include 'connection.php';
$sql="SELECT * FROM `user`";
$query=mysqli_query($conn,$sql);


while($row= mysqli_fetch_array($query)){
   
if($row['isadmin']!=1 && $row['status']==1){







?>

        <tbody>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['time']; ?></td>
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