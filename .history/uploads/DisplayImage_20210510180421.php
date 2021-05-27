<html>
    <head>
        <title>Fetcing the images</title>
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
                    while($row = mysqli_fetch_array($query_run)){
                        ?> 
                       <tr>
                           <td><?php echo '<a href = "page2.php?id = <?php echo $ro ?>"> <img src = "data:Image;base64,'.base64_encode($row['Image']).'" alt = "Image"> </a>'  ?></td>
                           <td><?php echo $row['Name']?></td>
                       </tr>
                       <?php
                    }
                ?>
            </table>
            </form>
        </center>
    </body>
</html>