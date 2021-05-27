<!DOCTYPE html>
<html>
    <h1>Welcome to booking page</h1>
    <?php 
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
    ?>
    <h1>Add Car</h1>
    <h1>R</h1>
</html>