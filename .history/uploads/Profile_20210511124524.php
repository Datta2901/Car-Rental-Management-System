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
    $email = $_SESSION['username'];
    $query = "SELECT * FROM userdetails WHERE mail= $email";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){
        ?> 
       <tr>
           <!-- <td><?php echo '<a href = "page2.php ?Id = $row["Id"]> <img src = "data:Image;base64,'.base64_encode($row['Image']).'" alt = "Image"> </a>' ?></td> -->
           <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="200" width="200"/>'?> </td> 
           <a href="page2.php?Id=<?php echo $row["Id"]; ?>">Show more</a>
           <td><?php echo $row['Name']?></td>
           <td><?php echo $row["Id"] ?></td>
       </tr>
       <?php
    }
?>
   
?>