<?php session_start?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./../Css/Home.css">
    <title>Car Rental</title>
  </head>
  <hr class = "Rule">

  <body>
        <p class = "some" >Car Rental Website </p>
        <div class = "random">
          <center>
              <nav>
                  <a href = "#home" >Home </a>
                  <a href = "./../Html/bookingsPage.html">Booking</a>
                  <a href = "#About" >About </a>
                  <a href = "./../Php/ContactUs.html" >Contact Us </a>
                  <a href = "./Login.html">Log Out </a>
              </nav>
          </center>
          <?php echo "Hello " $_SESSION['username']; ?>
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
