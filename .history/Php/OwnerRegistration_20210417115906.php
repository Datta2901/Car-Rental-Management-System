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
        $FirstName = $_POST['first_name'];
        $LastName = $_POST['last_name'];
        $DOB = $_POST['Dob'];
        $Age = $_POST['age'];
        $CompanyName = $_POST['company'];
        $Email  = $_POST['email'];
        $FirstName = $_POST['Password'];
        $FirstName = $_POST['Phone'];
        $FirstName = $_POST['Insurance'];
        $FirstName = $_POST['Address'];
    }
?>