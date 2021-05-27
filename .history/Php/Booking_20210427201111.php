<!DOCTYPE html>
<html>
    <>Welcome to booking page</>
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
    <a>Add Car</a>
    <a>Booked Cars</a>
    <a>Returned Cars</a>
</html>