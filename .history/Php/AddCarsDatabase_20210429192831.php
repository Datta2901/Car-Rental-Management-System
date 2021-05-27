<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }else{
        echo "Connection successful\n";
    }

    if(isset($_POST["Submit"])){
        $Name = $_POST['Name'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Address = $_POST['Address'];
        $Brand = $_POST['Brand'];
        $Model  = $_POST['Model'];
        $Colour = $_POST['Colour'];
        $Kilo = $_POST['Kilo'];
        $Seating = $_POST['Seating'];
        $Image = $_POST['Image'];
        $sql = "INSERT INTO cardetails(Name,PhoneNumber,Address,Brand,Model,Colour,Kilo,Seating,Image) values('$Name','$PhoneNumber',' $Address','$Brand','$Model','$Colour','$Kilo','$Seating','$Image')";
        if(mysqli_query($conn,$sql)){
            echo "Record Added Successfully";
            // header("Location:Login.html");
        }
        // }else{
        //     // echo "This Email is already registered try with other mail id";
        //     // echo "<img src = './../images/Mail.jpg' alt = 'This is an image' style = 'margin:150px 0px 0px 50px'>";
        //     // header("Refresh:5;url=OwnerRegistration.html");
        // } 
    }else{
        echo "<img src = './../images/serverError.png' alt = 'This is an image' style = 'margin:150px 0px 0px 50px'>";
    }
?>