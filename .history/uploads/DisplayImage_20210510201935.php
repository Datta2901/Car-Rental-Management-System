
<html>
    <head>
        <title>Fetching the images</title>
    </head>
    <body>
        <center>
            <form action = "" method = "POST" enctype="multipart/form-data">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <?php
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $db = "userform";
                    $conn = mysqli_connect($host,$username,$password,$db);
                    $query = "SELECT * FROM imageupload";
                    $query_run = mysqli_query($conn,$query);
                    session_start();
                    while($row = mysqli_fetch_array($query_run)){
                        ?> 
                        <?php echo '<a href = "page2.php ?id = $row["Id"]> <img src = "data:Image;base64,'.base64_encode($row['Image']).'" alt = "Image"> </a>' ?>
                       <tr>
                           <td><?php echo '<a href = "page2.php ?id = $row["Id"]> <img src = "data:Image;base64,'.base64_encode($row['Image']).'" alt = "Image"> </a>' ?></td>
                           <!-- <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="200" width="200"/>'?> </td>  -->
                           <!-- <a href="delete.php?id=<?php echo $row["Id"]; ?>">Delete</a> -->
                           <td><?php echo $row['Name']?></td>
                           <td><?php echo $row["Id"] ?></td>
                           <?php 
                           $_SESSION['Id'] = $row['Id'];
                           echo $_SESSION['Id'];
                           ?>
                       </tr>
                       <?php
                    }
                ?>
            </table>
            </form>
        </center>
    </body>
</html>