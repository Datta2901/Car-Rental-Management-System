

<body>
<?php
    session_start();
?>

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
    padding: 10px 10px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color: lightgreen;}
  
  .dropdown:hover .dropdown-content {display: block;background-color:white}
    </style>
  </head>
  <hr class = "Rule">

  <body>
        <p class = "some" style = "font-size:30px;font:bold;position:relative;left:30px;top:20px">Car Rental Website </p>
        <div class = "random" style = "position:relative">
          <center>
              <nav>
                  <a href = "#home" >Home </a>
                  <!-- <a href = "./../Html/bookingsPage.html">Booking</a> -->
                  <div class="dropdown">
                    <button class="drop-btn">Booking▼</button>
                    <div class="dropdown-content">
                      <a href="./UserBooking.php">Booking</a>
                      <a href="./UserCancelBooking.php">Cancel Booking</a>
                      <a href="./UserBookingHistory.php">History</a>
                    </div>
                  </div>
                  <a href = "./UserProfile.php">My Profile</a>
                  <div class="dropdown">
                    <button class="drop-btn">Account▼</button>
                    <div class="dropdown-content">
                      <a href="./UserUpdatePassword.php">Update Password</a>
                      <a href="./UserDelete.php">Delete my account</a>
                    </div>
                  </div>
                  <a href = "./../Php/UserContactUs.php" >Contact Us </a>
                  <a href = "./Logout.php">Log Out </a>
              </nav>
          </center>
        <?php 
          $email =$_SESSION['username'];
          $username = strstr($email, '@', true);
          echo "<h1 align= right style = 'color:blue;position:relative;bottom:20px'> "."Hello ".$username."😀</h1>";
        ?>
        </div>
       <hr class = "Rule">
        <br>
       
  </body>
</html>

    <hr class = "Rule">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="text-center py-2"> Contact Us </h2>
                        </div>
                        <div class="card-body">
                            <form action="./Contactus.php" method="POST">
                                <input type="text" name="UserName" placeholder="User Name" class="form-control mb-2" required>
                                <input type="email" name="Email" placeholder="Email" class="form-control mb-2" required>
                                <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2" required>
                                <textarea name="Msg" class="form-control mb-2" placeholder="Write The Message" required></textarea>
                                <button class="btn btn-success" name="Submit"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
            
            <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="text-center py-2">Feedback </h2>
                        </div>
                        <div class="card-body">
                            <form action="./FeedBack.php" method="POST">
                                <input type="text" name="UserName" placeholder="User Name" class="form-control mb-2" required>
                                <input type="email" name="Email" placeholder="Email" class="form-control mb-2" required>
                                <label>Rating<span style = "color: red;">&#42;</span></label>
                                <select name="Rating" required>
                                    <option value="" > Please Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <textarea name="Suggestion" class="form-control mb-2" placeholder="Write Your suggests to improve" required></textarea>
                                <button class="btn btn-success" name="Submit"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div> 
            <br>
    
    <div class = "symbols">
        <center>
            <br>
            <br>
            <a href="https://www.facebook.com/car.rental.756412/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/CarRent43482780" class="fa fa-twitter"></a>
            <a href="https://mail.google.com/mail/u/4/#inbox?compose=GTvVlcRzBzBdRwpnHJlHjVzXXcWZTjvMQKzjNzxmvXWWRKdXRnkxWBxSvSSJsGTbSTFMVRxskcBzp" class="fa fa-google"></a>
            <a href="https://linkedin.com/in/car-rental-08b57b211" class="fa fa-linkedin"></a>
            <a href="https://www.instagram.com/_car._rental_/" class="fa fa-instagram"></a>
            <br>
            <br>
        </center>
    </div>
</body>
</html>
