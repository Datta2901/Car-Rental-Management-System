<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./../Css/Home.css">
    <title>Car Rental</title>
    <style>

.drop-btn {
  background: none;
  border: none;
  padding: 0;
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: lightgreen;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .drop-btn {background-color: red;}
</style>
  </head>
  <hr class = "Rule">

  <body>
    <div class = "random">
      <center>
          <!-- <p align = left class = "some" style = "font-size:30px">Car Rental Website </p> -->
          <p align = "left" class = "some" style = "font-size:30px;font:bold">Car Rental Website </p>
          <nav>
            <a href = "#home" >Home </a>
            <a href = "./../Html/bookingsPage.html">Booking</a>
            <div class="dropdown">
                  <button class="drop-btn">Dropdown▼</button>
                  <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                  </div>
              </div>
            <a href = "./../php/Profile.php" >My Profile</a>
            <a href = "#About" >About </a>
            <a href = "./../Php/ContactUs.html" >Contact Us </a>
            <a href = "./../Php/Logout.php">Log Out </a>
          </nav>
      </center>
      <h1 align = "right" style = "font-size:30px;margin:10px">Hello  <?php echo $_SESSION['username'] ?></h1>

    </div>
        <br>
        <img class = "car"  src = "./../images/Car.jpg" alt = "This is a image2 ">
        <div id = "About" style = "background-color:#3d9996">
          <center>
            <h2>About Us</h2>
            <p>Seamless Shuttle with possible standards named as Car Travels,</p>
            <p>offering variety of travel styles founded in 2020.</p>
            <p>We provide a well maintained ground transportation that suits customer</p>
            <p>requirements perfectly. To make your trip-plan easier.</p>
            <p>Through cutting age technology, we provide great deal in car rental with the guaranteed lowest price.</p>
            <p>We constantly provide new cars.</p>
            <p>Our 24x7 online reservation system offer you to hire car any where by just on a single mouse click. </p>
            <p>Bookings can be made by logging on to the website.</p>
            <p> As an online car rental company, we acts as a one-stop shop for any kind of car rental needs.</p>

            <h3>Our corporate strategic goals are to:</h3>
            <p>Maintain an independent position.</p>
            <p>Optimise global presence.</p>
            <p> Build and leverage scale and scope.</p>
            <p>Create a well recognised and preferred international brand.</p>
            <p>Be a responsible company.</p>
          </center>
          <br>
          <br>
        </div>
  </body>
</html>
