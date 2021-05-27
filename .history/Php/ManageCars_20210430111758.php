



<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./../Css/Home.css">
    <title>Car Rental</title>
  </head>
  <hr class = "Rule">
  <body>
  <p class = "some" >Car Rental Website </p>
  <center>
    <nav>
        <a href = "#home">Home </a>
        <a href = "./ManageCars.php">Add Cars </a>
        <a href = "">About </a>
        <a href = "">Contact Us </a>
        <a href = "./Login.html">Log Out </a>  
    </nav>
    </center>
    <br>
  <hr class = "Rule">
    <form action = "./AddCarsDatabase.php" method="POST" enctype="multipart/form-data">
        <h2 class = "name" > Name
        <input  type = "text" name = "Name">
        </h2>
        <h2 class = "name" > Phone Number
        <input  type = "text" name = "PhoneNumber">
        </h2>
        <h2 class = "name" >Addresss
        <input  type = "text" name = "Address">
        </h2>
        <h2 class = "name" >Car Brand
        <input  type = "text" name = "Brand">
        </h2>
        <h2 class = "name" >Car Model
        <input  type = "text" name = "Model">
        </h2>
        <h2 class = "name" >Car Colour
        <input  type = "text" name = "Colour">
        </h2>
        <h2 class = "name" >Kilo Meters Covered previously
        <input  type = "text" name = "Kilo">
        </h2>
        <h2 class = "name" >Seating Capacity
        <input  type = "text" name = "Seating">
        </h2>
        <h2 for="img">Car image:
        <input type="file" name="file">
        <!-- <input type="submit" name="submit" value="Upload"> -->
        </h2>
        <button name = "Submit">Submit</button>
    </form>

    <button onclick="myFunction()">Car Request</button>

    <p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Your Requested has been Successfully Recorded";
}
</script>
  </body>
</html>
