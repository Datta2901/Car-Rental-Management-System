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
     $db = "";
     $conn = mysqli_connect($host,$username,$password,$db);
     $query = "SELECT * FROM imageupload";
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