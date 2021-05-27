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
                    
                ?>
            </table>
            </form>
        </center>
    </body>
</html>