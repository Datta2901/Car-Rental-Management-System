<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
      div {
        margin-bottom: 10px;
        padding-top: 15px;
      }
      label{
        display: inline-block;
        width: 150px;
        text-align: right;
      }
    </style>
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
        <center>
            <div>
                <label class = "name" >Car Brand<span style = "color: red;">&#42;</span></label>          
                <input  type = "text" name = "Brand" placeholder = "Car Brand" required>    
            </div>
    
            <label class = "name" >Car Model<span style = "color: red;">&#42;</span></label>
                  <input  type = "text" name = "Model" placeholder = "Model" required>
            
            <div>
                <label class = "name" >Car Colour<span style = "color: red;">&#42;</span></label>           
                <input  type = "text" name = "Colour" placeholder = "colour"required>
                
            </div>
            <div>
                <label class = "name" >Kilo Meters Covered previously<span style = "color: red;</label>">&#42;</span></label>
                <input  type = "text" name = "Kilo" placeholder = "Kilometers  travelled" required>
                
            </div>
            <div>
                <label class = "name" >Seating Capacity<span style = "color: red;">&#42;</span></label>
                <input  type = "text" name = "Seating" placeholder = "Seating capacity" required>
                
            </div>
            <div>
                <label class = "name" >Fare<span style = "color: red;">&#42;</span></label>    
                <input  type = "text" name = "Fare" placeholder="Fare per day" required>
                
            </div>
            <div>
                <label for="img">Car image:<span style = "color: red;">&#42;</span></label>
                <input type="file" name="Image" required>
            </div>
            
            <button name = "Upload" style = "width:fit-content;background-color:blue">Submit</button>
        </center>
    </form>
  </body>
</html>

<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "storedetails";
$conn1 = mysqli_connect($host,$username,$password,$db);
if(isset($_POST['Upload'])){
    $conn = mysqli_connect("localhost","root","","storedetails");
    $email = $_SESSION['username'];
    $query = "SELECT * FROM ownerdetails WHERE Email= '$email';";
    $query_run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($query_run);
    $name = "";
    $name .=  $data['FirstName'];
    $name .=  $data['LastName'];
    $file = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));
    $OwnerName = $name;
    $OwnerPhone = $data['PhoneNumber'];
    $OwnerEmail = $data['Email'];
    $Address = $data['Address'];
    $Brand = $_POST['Brand'];
    $Model = $_POST['Model'];
    $Colour = $_POST['Colour'];
    $Kilo = $_POST['Kilo'];
    $Seating = $_POST['Seating'];
    $Fare = $_POST['Fare'];
    $sql = "INSERT INTO booking (OwnerName,OwnerPhone,OwnerEmail,Address,Brand,Model,Colour,Kilo,Seating,Fare,Image) values('$OwnerName','$OwnerPhone','$OwnerEmail','$Address','$Brand','$Model','$Colour','$Kilo','$Seating','$Fare','$file')";
    if(mysqli_query($conn,$sql)){
        echo '<script type = "text/javascript">alert("Car Added Successfully")</script>';
    }else{
        echo "Something went wrong";
    }
}
