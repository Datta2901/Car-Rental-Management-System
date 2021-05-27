<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn = new mysqli_connect($host,$user,$password,$db);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }else{
        echo "Connection successful\n";
    }

    if(isset($_POST["Submit"])){
        $FirstName = $_POST['first_name'];
        $LastName = $_POST['last_name'];
        $Email = $_POST['email'];
        $Password = $_POST['Password'];
        $LicenseNumber = $_POST['LicenseNumber'];
        $AadharNumber = $_POST["AadharNumber"];
        $phoneNumber = $_POST["phone"];
        $sql = "INSERT INTO userdetails(FirstName,LastName,Email,Password,License Number,Aadhar Number,PhoneNumber) values('$FirstName','$LastName','$email','$password','$Liscense','$Aadhar','$phone')";
        if(mysqli_query($conn,$sql)){
            echo "Record Added Successfully";
        }else{
            echo "Error";
        } 
    }else{
        echo "Something Went Wrong";
    }
    
?>