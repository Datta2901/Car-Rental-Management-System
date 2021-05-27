<?php 
session_start();
echo '<h1>My Profile</h1>';
$host = "localhost";
$user = "root";
$password = "";
$db = "storedetails";
$conn = mysqli_connect($host,$user,$password,$db);
if(!$conn){
    
    echo "<img src = './../images/serverError.png' alt = 'This is an image' style = 'margin:150px 0px 0px 50px'>";
    echo "Connection failed : ".mysqli_connect_error();
    die();
}

echo $_SESSION['username'];
$query = "SELECT * FROM userdetails WHERE email = $_SESSION["username"];";

?>