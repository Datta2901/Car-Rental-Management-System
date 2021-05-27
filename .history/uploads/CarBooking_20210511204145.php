<?php
    session_start();
    $Id = $_GET['Id'];
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$user,$password,$db);
    if(!$conn){
        
        echo "<img src = './../images/serverError.png' alt = 'This is an image' style = 'margin:50px 300px150px 0px 0px 50px'>";
        echo "Connection failed : ".mysqli_connect_error();
        die();
    }

    $query = "SELECT * FROM booking WHERE Id= '$Id';";
    $query_run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($query_run);
    if($data){  
        echo "<h1>Owner Details</h1>"
        echo "<h1  style = 'color:green;margin:50px 300px '> Name  : ".$data['OwnerName']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Phone Number : ". $data['OwnerPhone']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Email : ".$data['OwnerEmail']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Company Address : ".$data['Address']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '> : ".$data['Brand']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Email : ".$data['Model']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>Phone Number : ".$data['Colour']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>InsuranceNumber : ".$data['Kilo'] ."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>Address : ".$data['Seating']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>Address : ".$data['Fare']."</h1>";
        echo '<img src="data:image/jpeg;base64,'.base64_encode($data['Image'] ).'" height="500"/>';  
    }else{
        echo "Something went wrong";
    }

?>