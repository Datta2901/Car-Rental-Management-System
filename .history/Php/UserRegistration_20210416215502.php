<?php
    echo "<h1>Are u working ? </h1>";

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$user,$password,$db);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }else{
        echo "<h1>Connection successful</h1>";
    }

    if(isset($_POST["Submit"])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['Password'];
        $Liscense = $_POST['LicenseNumber'];
        $Aadhar = $_POST["AadharNumber"];
        $phone = $_POST["phone"];
        
        $sql = "INSERT INTO userdetails(First Name,Last Name,Email,Password,LicenseNumber,AadharNumber,Phone Number) values('$fname','$lname','$email','$password','$Liscense','$Aadhar','$phone')";
        if(mysqli_query($conn,$sql)){
            echo "Record Added Successfully";
        }else{
            echo "Error";
        } 
    }
    
?>