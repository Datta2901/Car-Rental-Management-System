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
        <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $db = "storedetails";
            $conn = mysqli_connect($host,$username,$password,$db);
            $query = "SELECT * FROM booking";
            $query_run = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($query_run)){ 
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="200" width="200"/>';
                ?><h1>1</h1>
                <a href="page2.php? Id= <?php echo $row["Id"]; ?>" >Show more</a>
                <?php
            }
        ?>
</body>
</html>

<!-- <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    $query = "SELECT * FROM booking";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){ 
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="200" width="200"/>';
        echo '<a href="page2.php? Id= <?php echo $row["Id"];  >Show more</a>;?>"';
    }
?> -->