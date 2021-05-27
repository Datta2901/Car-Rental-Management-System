<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn =  mysqli_connect($host,$user,$password,$db);
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
        $PhoneNumber = $_POST["phone"];
        $sql = "INSERT INTO userdetails(FirstName,LastName,Email,Password,LicenseNumber,AadharNumber,PhoneNumber) values('$FirstName','$LastName','$Email','$Password','$LicenseNumber','$AadharNumber','$PhoneNumber')";
        if(mysqli_query($conn,$sql)){
            echo "Record Added Successfully";
            header("Refresh = 10,Location:")
        }else{
            echo "Error";
        } 
    }else{
        echo "Something Went Wrong";
    }
    
?>