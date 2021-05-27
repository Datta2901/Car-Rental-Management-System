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
        echo "<h1>Owner Details</h1>";
        echo "<h2  style = 'color:green;margin:50px 300px '> Name  : ".$data['OwnerName']."</h2>";
        echo "<h2 style = 'color:green;margin:50px 300px '>Phone Number : ". $data['OwnerPhone']."</h2>";
        echo "<h2 style = 'color:green;margin:50px 300px '>Email : ".$data['OwnerEmail']."</h2>";
        echo "<h2 style = 'color:green;margin:50px 300px '>Company Address : ".$data['Address']."</h2>";
        echo "<h1 Car Details</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '> Brand : ".$data['Brand']."</h1>";
        echo "<h1 style = 'color:green;margin:50px 300px '>Model : ".$data['Model']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>COlour : ".$data['Colour']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>Kilometers Travelled Previously : ".$data['Kilo'] ."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>Seating Capacity : ".$data['Seating']."</h1>";
        echo "<h1 style = 'color:green; margin:50px 300px '>F : ".$data['Fare']."</h1>";
        echo '<img src="data:image/jpeg;base64,'.base64_encode($data['Image'] ).'" height="500"/>';  
    }else{
        echo "Something went wrong";
    }

?>