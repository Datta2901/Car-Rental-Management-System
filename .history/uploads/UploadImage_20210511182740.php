<html>
    <head>
        <title> Image upload</title>
    </head>
    <body>
        <center>
            <h1>Image upload to database using php </h1>
            <form action = "" method = "POST" enctype ="multipart/form-data">
            <label>Select image :</label>
            <input type = "file" name = "Image" ></input>
            <label>Name :</label>
            <input type = "text" name = "Name"></input><br></br>
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
    $file = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));
    $Name = $_POST['Name'];
    // $sql = "INSERT INTO imageupload('',Image,Name) values('','$file','$Name')";
    $sql = "INSERT INTO imageupload  values('','$file','$Name')";
    if(mysqli_query($conn,$sql)){
        echo "<h1 style = 'text-colorgreen'>Successfully added</h1>";
        echo '<script type = "text/javascript">alert("Try Using with another mail")</script>';
    }else{
        echo "Something went wrong";
    }
}

?>