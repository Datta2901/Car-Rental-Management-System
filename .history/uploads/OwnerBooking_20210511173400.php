<?php 
    session_start();
?>

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
        <a href = "./OwnerHome.php">Home </a>
        <a href = "./ManageCars.php">Add Cars </a>
        <a href = "./ContactUs.html">Contact Us </a>
        <a href = "./Login.html">Log Out </a>  
    </nav>
    </center>
    <br>
  <hr class = "Rule">
    <form action = "" method="POST" enctype="multipart/form-data">
        <h2 class = "name" > Name<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "OwnerName" placeholder="Name" required>
        </h2>
        <h2 class = "name" > Phone Number<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "OwnerPhone" placeholder = "Phone number"required>
        </h2>
        <h2 class = "name" >Address<span style = "color: red;">&#42;</span>
        <textarea name = "Address" required></textarea>
        </h2>
        <h2 class = "name" >Car Brand<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Brand" placeholder = "Car Brand" required>
        </h2>
        <h2 class = "name" >Car Model<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Model" placeholder = "Model" required>
        </h2>
        <h2 class = "name" >Car Colour<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Colour" placeholder = "colour"required>
        </h2>
        <h2 class = "name" >Kilo Meters Covered previously<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Kilo" placeholder = "Kilometers  travelled" required>
        </h2>
        <h2 class = "name" >Seating Capacity<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Seating" placeholder = "Seating capacity" required>
        </h2>
        <h2 class = "name" >Fare<span style = "color: red;">&#42;</span>
        <input  type = "text" name = "Fare" placeholder="Fare per day" required>
        </h2>
        <h2 for="img">Car image:<span style = "color: red;">&#42;</span>
        <input type="file" name="Image" required>
        </h2>
        <button name = "Upload">Submit</button>
        <?php
            $a = "a";
            $b = "b";
            $
            echo $c;
        ?>
    </form>
  </body>
</html>

<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "storedetails";
$conn1 = mysqli_connect($host,$username,$password,$db);

// echo $_SESSION['username'];


if(isset($_POST['Upload'])){
    $conn = mysqli_connect("localhost","root","","storedetails");
    $email = $_SESSION['username'];
    $query = "SELECT * FROM ownerdetails WHERE Email= '$email';";
    $query_run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($query_run);
    if($data){  
        echo '<br>';
        echo "<h1  style = 'color:green;margin:50px 300px '> First Name  : ".$data['FirstName']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Last Name : ". $data['LastName']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Date Of Birth : ".$data['DOB']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Age : ".$data['Age']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Company Name : ".$data['CompanyName']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Email : ".$data['Email']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>Phone Number : ".$data['PhoneNumber']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>InsuranceNumber : ".$data['InsuranceNumber'] ."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>Address : ".$data['Address']."</h1>";
    }

    $file = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));
    $OwnerName = $_POST['OwnerName'];
    $OwnerPhone = $_POST['OwnerPhone'];
    $OwnerEmail = $data['Email'];
    $Address = $data['Address'];
    $Brand = $_POST['Brand'];
    $Model = $_POST['Model'];
    $Colour = $_POST['Colour'];
    $Kilo = $_POST['Kilo'];
    $Seating = $_POST['Seating'];
    $Fare = $_POST['Fare'];
    $sql = "INSERT INTO booking (OwnerName,OwnerPhone,Address,Brand,Model,Colour,Kilo,Seating,Fare,Image) values('$Name','$file')";
    if(mysqli_query($conn,$sql)){
        echo "Successfully added";
    }else{
        echo "Something went wrong";
    }
}
