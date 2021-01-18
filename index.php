
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
    <div class="row text-center mb-5">
      <div class="col text-center " id="mid">
        <h1 class="shrink">Book a City Taxi to your destination in town</h1>
        <h4 class="shrink">Choose from range of category and prices</h4>
      </div>
    </div>
    <div class="ml-4 pb-4 ml-left mt-2 left" id="formleft">
      <div class="container">
        <div class="row">
          <div class="col col-sm-12 col-12 col-xs-12 text-center">
            <p class="pt-2" style="text-decoration:underline">CEDCAB</p>
            
          </div>

          <div class="col col-sm-12 col-12 col-xs-12">
            <form>
              <div class="form-group col-xs-12">
                <label for="exampleFormControlSelect1">Current Location</label>
                <select class="form-control" name="pickup" id="pickup">
                  <option value="" class="text-secondary">
                    Pickup Point
                  </option>
                  <option value="Charbagh">Charbagh</option>
                  <option value="Indranagar">Indranagar</option>
                  <option value="BBD">BBD</option>
                  <option value="Barabanki">Barabanki</option>
                  <option value="Faizabad">Faizabad</option>
                  <option value="Basti">Basti</option>
                  <option value="Gorakhpur">Gorakhpur</option>
                </select>
              </div>
    
              <div class="form-group col-xs-12">
                <label for="exampleFormControlSelect1">Destination Location</label>
                <select class="form-control" name="drop" id="drop">
                  <option value="" class="text-secondary">Drop Point</option>
                  <option value="Charbagh">Charbagh</option>
                  <option value="Indranagar">Indranagar</option>
                  <option value="BBD">BBD</option>
                  <option value="Barabanki">Barabanki</option>
                  <option value="Faizabad">Faizabad</option>
                  <option value="Basti">Basti</option>
                  <option value="Gorakhpur">Gorakhpur</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">CAB TYPE</label>
                <select class="form-control" name="cabtype" id="cabtype" onchange="hide()">
                  <option value="" class="text-secondary">Cab Type</option>
                  <option value="CedMicro">CedMicro</option>
                  <option value="CedMini">CedMini</option>
                  <option value="CedRoyal">CedRoyal</option>
                  <option value="CedSUV">CedSUV</option>
                </select>
              </div>
              <div class="form-group" id="l">
                <label class="col-sm-3 col-sm-9">Luggage</label>
                <input type="number" class="form-control-plaintext" name="luggage" id="lw"
                  placeholder="Enter weight in kg" oninput="this.value=Math.abs(this.value)" />
                <p id="msg"></p>
              </div>
            </form>

            <p id="price"></p>
            <button class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" value="Calculate Fare" style="background-color: rgb(31, 109, 255)" id="submit" onclick="book()">
              Calculate</button>
              <span id="bthide">
            <button class="btn btn-outline-primary" style="" type="" onclick="location.href = 'login.php';">Book Now</button>

            <button class="btn btn-outline-primary" style="" type="submit" onclick="location.href = 'index.php';">Not Now</button><span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php' ?>
</body>
</html>