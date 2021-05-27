<?php
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    $email = $_SESSION['username'];
    $query = "SELECT * FROM booking WHERE OwnerEmail = '$email'";
    $query_run = mysqli_query($conn,$query);
    echo "<table>";
    $i = 0;
    while($row = mysqli_fetch_array($query_run)){ 
        if($row['Status' == 1]){
            if( $i % 2 == 0){
                echo "<tr>";
            }
            echo "<td>";
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="400px" style = "padding:30px;"/>';
                echo '<br>'  
            ?> 
            <a href="UserCarBookingHistory.php? Id= <?php echo $row["Id"];?>"  style = "background-color:green;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;position:relative; left:300px;">Show more</a>
            <?php
            echo "</td>";
            $i++;
        }
    }

?>