<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Booking</title>
</head>
<body>
        <h1>User Booking</h1>
        <h3>Available Cars</h3>
</body>
</html>

<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    $query = "SELECT * FROM booking";
    $query_run = mysqli_query($conn,$query);
    
    echo "<table>";
    $i = 0;
    while($row = mysqli_fetch_array($query_run)){ 
        if()
            if( $i % 2 == 0){
                echo "<tr>";
            }
        
            echo "<td>";
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="400px" style = "padding:30px;"/>';
                echo '<br>'  
            ?> 
            <!-- <a href="CarBooking.php? Id= <?php echo $row["Id"]?>;" style = "padding-left:300px;">Show more</a> -->
        <a href="CarBooking.php? Id= <?php echo $row["Id"];?>"  style = "background-color:green;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;position:relative; left:300px;">Show more</a>
            <?php
            echo "</td>";
            $i++;
    }

?>