

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../Css/Home.css">
    <link rel="stylesheet" href="./../Css/SocialMedia.css">
    
    <title>Contact Us </title>

</head>
<body>
<hr class = "Rule">
  <p class = "some" >Car Rental Website </p>
  <div class = "aref">
    <center>
        <nav>
            <a href = "./../Php/Home.html" style = "text-decoration: none">Home </a>
            <a href = "./../Html/bookingsPage.html" style = "text-decoration: none">Booking</a>
            <a href = "./Login.html" style = "text-decoration: none">Log Out </a>  
        </nav>
    </center>
    </div>
    <br>
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
    
        
        <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2">Feedback </h2>
                    </div>
                    <div class="card-body">
                        <form action="./Contactus.php" method="POST">
                            <input type="text" name="UserName" placeholder="User Name" class="form-control mb-2" required>
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2" required>
                            <label for="points">points</label>
                            <select id="points" name="points">
                                <option value="" disabled selected hidden>Please Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">9</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <textarea name="Msg" class="form-control mb-2" placeholder="Write Your suggests to improve" required></textarea>
                            <button class="btn btn-success" name="Submit"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <? php 
        include('SocialMediaSymbols.html')
    ?>
</body>
    
</html>