<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "storedetails";
    $conn = mysqli_connect($host,$username,$password,$db);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }else{
        echo "Connection successful\n";
    }


    $statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    if(isset($_POST["Submit"])){
        $Name = $_POST['Name'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Address = $_POST['Address'];
        $Brand = $_POST['Brand'];
        $Model  = $_POST['Model'];
        $Colour = $_POST['Colour'];
        $Kilo = $_POST['Kilo'];
        $Seating = $_POST['Seating'];

        // $Image = $_POST['Image'];

        if(($_FILES["file"]["name"])){
            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    // Insert image file name into database
                    $sql = "INSERT INTO cardetails(Name,PhoneNumber,Address,Brand,Model,Colour,Kilo,Seating,Image) values('$Name','$PhoneNumber',' $Address','$Brand','$Model','$Colour','$Kilo','$Seating','.fileName.')";
                    if($sql){
                        $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    }else{
                        $statusMsg = "File upload failed, please try again.";
                    } 
                }else{
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }else{
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            }
        }else{
            $statusMsg = 'Please select a file to upload.';
        }
        
        // Display status message
        echo $statusMsg;
        



        // $sql = "INSERT INTO cardetails(Name,PhoneNumber,Address,Brand,Model,Colour,Kilo,Seating,Image) values('$Name','$PhoneNumber',' $Address','$Brand','$Model','$Colour','$Kilo','$Seating','$Image')";
        if(mysqli_query($conn,$sql)){
            echo "Record Added Successfully";
            header("Location: Display.php");

        }
        // }else{
        //     // echo "This Email is already registered try with other mail id";
        //     // echo "<img src = './../images/Mail.jpg' alt = 'This is an image' style = 'margin:150px 0px 0px 50px'>";
        //     // header("Refresh:5;url=OwnerRegistration.html");
        // } 
    }else{
        echo "<img src = './../images/serverError.png' alt = 'This is an image' style = 'margin:150px 0px 0px 50px'>";
    }
?>