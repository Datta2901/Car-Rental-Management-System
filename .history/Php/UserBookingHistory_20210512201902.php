<?php
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    $email = $_SESSION['username'];
    $query = "SELECT * FROM booking WHERE UserEmail = '$email' and Status = '1'";
    $query_run = mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run) == 0){
        echo "<h1 style = 'color:red;padding : 300px 0px 0px 500px'>There are no previous bookings</h1>";
        header("Refresh 5;url=UserHome.php");
    }
    echo "<table>";
    $i = 0;
    while($row = mysqli_fetch_array($query_run)){ 
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
?>