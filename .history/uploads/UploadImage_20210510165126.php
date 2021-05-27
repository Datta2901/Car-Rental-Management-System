<html>
    <head>
        <title> Image upload</title>
    </head>
    <body>
        <center>
            <h1>Image upload to database using php </h1>
            <form action = "" method = "POST" enctype ="multipart/form-data">
            <label>Select image :</label>
            <input type = "file" name = "image" id = "Name" ></input>
            <label>Name :</label>
            <input type = "text" name = "image" id = "image" ></input><br></br>
            <button name = "Upload">Submit</button>
            </form>
        </center>
    </body>
</html>

<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "userform";
$conn = mysqli_connect($host,$username,$password,$db);

if(isset($_POST['Upload'])){
    $file = addslashes(file_get_conten)
}


?>